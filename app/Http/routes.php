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

Route::get('/', function () {
    return view('dynamic/index');
});
Route::get('login/index',function(){
	return view('login');
});
Route::get('login/register',function(){
	return view('register');
});

Route::get('dynamic/index',function(){
	return view('dynamic/index');
});

Route::get('nearby/index', function () {
    return view('nearby/index');
});

Route::get('record/index', function () {
    return view('record/index');
});

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
