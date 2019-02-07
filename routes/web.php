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

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/posts/{post}/show', 'PostController@show')->name('post.show');

/**
 * Administration Routes
 */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', 'Admin\AdminController@index')->name('admin.index');

	Route::resource('/posts', 'PostController');
	//Route::get('/post/create', 'Admin\PostController@create')->name('post.create');

});

Route::auth();