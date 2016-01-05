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

/*basic view pages*/
Route::get('hello', function () {
    //testing out this hello page
    echo 'hello page';
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
Route::get('login', function () {
    //do some login auth stuff
    echo 'login page';
});

Route::get('logout', function () {
    //do some login auth stuff
    echo 'logout page';
});


/*IF logged in as a sponsor user type*/
Route::get('profile', function () {
    //clearly need to add in the variable 
    echo 'hello page';
});

/*If logged in as a musician user type*/
