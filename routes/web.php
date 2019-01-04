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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/jasa/form', function () {
    return view('user.jasa.form');
});

Route::get('/user/login/fitur', function () {
    return view('user.login.fitur');
});

Route::resource('jasa', 'JasaController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');