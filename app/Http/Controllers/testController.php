<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class testController extends Controller
{
    //





    public function index(){




    	return view('admin.dashboard');



    }




    public function store(Request $req){

		$fname='';
    	
    	if($req->image){

    		$fname = Auth::user()->id;
    		// echo "File Detected";
    		$req->image->storeAs('image' , $fname.'.jpg');
		}


		$user = Auth::user();
        $user->image = $fname . '.jpg';




        $user->update($req->all());

       

     




    		return redirect('/home');
    	








    }
}
