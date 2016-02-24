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
    return view('welcome');
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


Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/accountinfo', function()
{
    return View::make('accountinfo');
});

Route::get('/about', function()
{
    return View::make('about');
});

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/signup', function()
{
	return View::make('signup');
});

Route::get('/passreset', function()
{
	return View::make('passreset');
});
