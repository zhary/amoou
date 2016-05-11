<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'Client\IndexController@index');

Route::get('/', 'Client\IndexController@index');

Route::get('login/index','User\LoginController@index');
Route::get('login/register','User\RegisterController@index');
Route::post('user/increase','User\RegisterController@increase');

Route::get('dynamic/index',function(){
	return view('dynamic/index');
});

Route::get('nearby/index', function () {
    return view('nearby/index');
});

Route::get('record/index','Client\RecordController@index');

Route::get('find/index', function () {
    return view('find/index');
});

Route::get('my/index', function () {
    return view('my/index');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
