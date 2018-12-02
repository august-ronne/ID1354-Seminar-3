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

Route::get('/', 'PagesController@index');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/recipes', 'PagesController@recipes_collection');
Route::get('/recipes/{recipe}', 'PagesController@recipe');

Route::resource('comments', 'CommentsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');