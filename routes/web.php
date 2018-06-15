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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/viewusers', 'HomeController@index2');

Route::get('viewusers', 'UserController@index');

Route::get('/viewusers/delete/{id}', 'UserController@delete');

Route::get('/viewusers/edit/{id}', 'UserController@showed');

Route::post('/viewusers/edit/{id}', 'UserController@update');

Route::get('viewusers/show/{id}', 'UserController@show');