<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'postController@index')->name('post');

Route::post('/categoryCreate', 'categoryController@store')->name('categoryStore');
Route::post('/categoryUpdate/{id}', 'categoryController@update')->name('categoryUpdate');
Route::get('/category', 'categoryController@index')->name('categorylist');
Route::get('/catDelete/{id}', 'categoryController@distroy');
Route::get('/categoryEdit/{id}', 'categoryController@editCategory');




Route::get('{anypath}','HomeController@index')->where( 'path', '([A-z\d-\/_.]+)? ');
