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

Route::get('/',('HomeController@index'))->name('index');
Route::get('/product','HomeController@products')->name('products');

Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/admin-create','AdminController@product_create')->name('admin.product');
Route::get('/create','AdminController@create')->name('admin.create');
Route::post('/create_success','AdminController@store')->name('admin.product.store');
