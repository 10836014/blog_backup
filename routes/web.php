<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/about', function() {
    return view('about');
});*/

Route::get('laravel-version', function(){
    $laravel = app();
    return "Your Laravel version is ".$laravel::VERSION;
});

Route::get('/about', 'PagesController@getAbout');

Route::get('/', function () {
    return view('welcome');
});

