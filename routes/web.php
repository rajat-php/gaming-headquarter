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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact-us', 'HomeController@contact')->name('contact-us');

Route::prefix('auth')->name('auth.')->group(function() {
    Route::get('facebook', 'Auth\RegisterController@facebookRedirect')->name('facebook');
    Route::get('facebook/callback', 'Auth\RegisterController@facebookCallback');

    Route::get('google', 'Auth\RegisterController@googleRedirect')->name('google');
    Route::get('google/callback', 'Auth\RegisterController@googleCallback');
});