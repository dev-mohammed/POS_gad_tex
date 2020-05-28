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


Route::get('admin/home', 'Admin\HomeController@index')->name('getAdminHome');

// category Types
Route::get('admin/category/types', 'Admin\CategoryTypeController@index')->name('getAdminCategoryTypes');
Route::get('admin/category/types/create', 'Admin\CategoryTypeController@create')->name('getAdminCreateCategoryType');
Route::post('admin/category/types/store', 'Admin\CategoryTypeController@store')->name('postAdminStoreCategoryType');
Route::get('admin/category/types/edit/{type}', 'Admin\CategoryTypeController@edit')->name('getAdminEditCategoryType');
Route::post('admin/category/types/update/{id}', 'Admin\CategoryTypeController@update')->name('postAdminUpdateCategoryType');


// Categories
Route::get('admin/categories', 'Admin\CategoriesController@index')->name('getAdminCategories');
Route::get('admin/categories/create', 'Admin\CategoriesController@create')->name('getAdminCreateCategories');
