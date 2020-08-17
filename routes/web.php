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

 // Requests to the subdomain.domain redirects to the route poiting to the list of students 
 // Note: Need to write more clean code here !!
Route::get('/', function () {
    return redirect('students');
});

// All subdomain routes
Route::group(['domain' => 'laravel.persteenolsen.dk'], function () {
    Route::get('/test', function () {
        return view('test');
    });
});


// The laravel welcome home page
Route::get('/welcome', function () {
    return view('welcome');
});



Route::resource('students', 'StudentController');

