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

Route::get('/','WelcomeController@index');
Route::get('/contact','WelcomeController@contact');
Route::get('/admin','AdminController@index');
Route::post('/admin-login','AdminController@AdminLogin');
Route::get('/dashboard','SuperAdminController@index');
Route::get('/add-category','SuperAdminController@addCategory');
Route::post('/save-category','SuperAdminController@saveCategory');
Route::get('/manage-category','SuperAdminController@manageCategory');
Route::get('/unpublish-category/{id}','SuperAdminController@unpublishedCategory');
Route::get('/publish-category/{id}','SuperAdminController@publishedCategory');

Route::get('/edit-category/{id}','SuperAdminController@editCategory');
Route::post('/update-category','SuperAdminController@updateCategory');
Route::get('/delete-category/{id}','SuperAdminController@deleteCategory');


Route::get('/add-blog','SuperAdminController@addBlog');
Route::post('/save-post','SuperAdminController@savePost');
Route::get('/manage-blog','SuperAdminController@manageBlog');

Route::get('/logout','SuperAdminController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
