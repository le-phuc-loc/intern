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



Route::get('/home', 'HomeController@index')->name('home');


Route::post('/profile-update', 'HomeController@updateInfo');

Route::get('/profile-update', 'HomeController@updateInfoShow');

Auth::routes(['verify' => true]);
Route::get('/profile', 'HomeController@showProfile')->middleware('verified');


