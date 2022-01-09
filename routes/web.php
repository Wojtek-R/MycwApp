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

/*Route::get('/', function () {
    return view('books/layout');
});*/
Route::get('/book', 'BookController@index')->name('book');
Route::post('/book/create', 'BookController@create')->name('create');
Route::get('/book/updateform/{id}', 'BookController@update_form')->name('updateform');
Route::get('/book/update/{id}', 'BookController@update')->name('update');
Route::get('/book/delete/{id}', 'BookController@delete')->name('delete');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
