<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('audio-test', function () {
    //testing out this hello page
    return view('audio-test');
});

/*basic view pages*/
Route::get('hello', function () {
    //testing out this hello page
    echo 'hello page again';
});

Route::get('about', function () {
    //about page
    echo 'about page';
});

Route::get('contact', function () {
    //contact
    echo 'contact page';
});

Route::get('support', function () {
    //support
    echo 'support page';
});


/* auth goodness*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


/*IF logged in as a sponsor user type*/
Route::get('profile', function () {
    //clearly need to add in the variable
    echo 'hello page';
});

/*If logged in as a musician user type*/
