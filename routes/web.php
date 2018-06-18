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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('users', 'UserController@index');

// Route::get('/viewusers/delete/{id}', 'UserController@delete');

// Route::get('/users/edit/{id}', 'UserController@showed');

// Route::post('/users/edit/{id}', 'UserController@update')->name('user.update');

// Route::get('/users/show/{id}', 'UserController@show');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::get('/users/delete/{id}', 'UserController@delete');

Route::get('/users/edit/{id}', 'UserController@showed');

Route::post('/users/edit/{id}', 'UserController@update');

Route::get('search', 'EloquentController@index')->name('search');

Route::get('search', 'UserController@index');

Route::get('search/getdata', 'EloquentController@getdata')->name('search.getdata');

Route::get('users/show/{id}', 'UserController@show');

Route::get('/logout', 'UserController@logout');