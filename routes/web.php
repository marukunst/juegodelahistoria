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

Route::get('/login','PageController@MostrarLogin');
Route::get('/register','PageController@MostrarRegister');
Route::get('/index','PageController@MostrarPreHome');
Route::get('/home','PageController@MostrarHome');
Route::get('/FAQs','PageController@MostrarFaqs');

