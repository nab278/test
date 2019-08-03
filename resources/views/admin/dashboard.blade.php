<!-- {{URL::route('dashboard')}} -->

{{ URL::route('test-dashboard') }}


<div style="border: 1px solid black; width :25%;padding: 25px;border-radius: 6px">

<form action="{{ route('test-upload') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Book title:
    <br />
    <input type="text" name="title" />
    <br /><br />
    Logo:
    <br />
    <input type="file" name="logo" />
    <br /><br />
    <input type="submit" value=" Save " />
</form>

</div>