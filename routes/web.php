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

Route::get('/', 'HomeController@welcome')->name('home');
Route::get('/users', 'UserController@users')->name('users');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'UserController@logout')->name('logout');

    Route::get('/books', 'BookController@usersBooks')->name('books.usersBooks');
    Route::get('/myBooks', 'BookController@myBooks')->name('books.myBooks');
    Route::get('/add', 'BookController@add')->name('books.add');
    Route::post('/add', 'BookController@create')->name('books.create');
});
