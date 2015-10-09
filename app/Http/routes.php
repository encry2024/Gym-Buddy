<?php

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// USER ROUTE
post('validateLogin', ['as' => 'vl', 'uses' => 'UserController@validateLogin']);
get('/', ['as' => 'home', 'uses' => 'UserController@showProfile']);