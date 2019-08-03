<?php

namespace App\Http\Controllers;

use App\tabtest;
use Illuminate\Http\Request;

class TabtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

return view('test.index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
// dd(Input);
     
// dd( $request->username   );
            // $obj = new tabtest();

            // $obj->name = "Test name";
            // $obj->test_content = "Test Content";
            // $obj->save();
            
        tabtest::create($request->all()) ;   
            dd(tabtest::all());







    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tabtest  $tabtest
     * @return \Illuminate\Http\Response
     */
    public function show(tabtest $tabtest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tabtest  $tabtest
     * @return \Illuminate\Http\Response
     */
    public function edit(tabtest $tabtest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tabtest  $tabtest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabtest $tabtest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tabtest  $tabtest
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabtest $tabtest)
    {
        //
    }
}
