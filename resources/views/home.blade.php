@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <hr>

                    <h4>Edit profile</h4>



                <form action="{{ route('test-upload') }}" method="POST" enctype="multipart/form-data">
    
{{ csrf_field() }}
                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control"><br>
                    <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control"><br>

                    <input type="file" name="image"  class="form-control"/>

                    <input type="submit"  value="Update" class="form-control">


                </form>
                  

                
                   



                    <img src="{{asset('../storage/app/image/'.Auth::User()->id)}}.jpg">











                </div>
            </div>
        </div>
    </div>
</div>
@endsection
