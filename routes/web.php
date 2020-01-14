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

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Auth::routes();

Route::get('/', 'CustomRegisterController@index')->name('/' );
Route::get('/login', 'CustomRegisterController@login')->name('login' );
Route::post('/register/submit', 'CustomRegisterController@submit')->name('registerSubmit' );

Route::get('/home', 'HomeController@index')->name('home');
