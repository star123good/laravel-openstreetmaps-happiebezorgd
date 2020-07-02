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

Route::domain('localhost')->group(function () {
    Route::get('/', function() {
    	return view('welcome');
    });
    Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
});

Route::domain('connect.happiebezorgd.nl')->group(function () {
    Route::get('/', function() {
    	return view('connect.connectlogin');
    });
});