<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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


Route::get('/', 'DashboardController@index');


Route::get('create-category', 'CategoryController@create');
Route::post('post-category-form','CategoryController@store');
Route::get('all-categories', 'CategoryController@index');
Route::get('edit-category/{id}', 'CategoryController@edit');
Route::post('update-category-form/{id}', 'CategoryController@update');
Route::get('delete-category/{id}', 'CategoryController@destroy');


Route::get('create-blog-post', 'BlogPostController@create');
Route::post('store-blog-post','BlogPostController@store');
Route::get('all-blog-posts', 'BlogPostController@index');
Route::get('edit-blog-post/{id}', 'BlogPostController@edit');
Route::post('update-blog-post/{id}', 'BlogPostController@update');
Route::get('delete-blog-post/{id}', 'BlogPostController@destroy');

Route::get('create-estudiante', 'EstudianteController@create');
Route::post('post-estudiante-form','EstudianteController@store');
Route::get('all-estudiante', 'EstudianteController@index');
Route::get('edit-estudiante/{id}', 'EstudianteController@edit');
Route::post('update-estudiante-form/{id}', 'EstudianteController@update');
Route::get('delete-estudiante/{id}', 'EstudianteController@destroy');
