<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/{sq}', function ($sq) {  
// return "Value : " . $sq;
// });


Route::get('user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');


Route::get('/rt',[
	'as'=>'rt',
	'uses'=>'test2@sample'
]);



Route::get('test/','test@index')->middleware('test');
Route::get('crud','TabtestController@index')->name('dashboard');
Route::post('cr/',
    [
        'as' => 'crtest',
        'uses' => 'TabtestController@create',

    ]
);



// ----------------------------NEW ROUTES----------------------------//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['prefix' => 'test' , 'as' => 'test-'],function(){

		Route::get('/T','testController@index')->name('dashboard');
		Route::post('/store','testController@store')->name('upload');


	});