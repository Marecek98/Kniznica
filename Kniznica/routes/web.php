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

Route::get('/showBook/{id}', ['as' => 'showBook', 'uses' => 'BookController@showBookAction']);
Route::get('/showAllBook', ['as' => 'showAllBook', 'uses' => 'BookController@showAllBookAction']);
Route::get('/add-book',['as' => 'add-user', 'uses' => 'BookController@getAddBookForm']);
Route::get('/delete-book/{id}',['as' => 'delete-user', 'uses' => 'BookController@showdeleteBookAction']);

Route::post('/insertBook', ['as' => 'insertBook', 'uses' => 'BookController@insertBookAction']);
Route::post('/deleteBook/{id}', ['as' => 'deleteBook', 'uses' => 'BookController@deleteBookAction']);
Route::post('/updateBook/{id}', ['as' => 'updateBook', 'uses' => 'BookController@updateBookAction']);


