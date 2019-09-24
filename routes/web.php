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

// Route::get('/', function () {
//     return view('welcome');
// });

// test route
Route::get('/', function () {
    return view('frontend.index');
});

// static pages
Route::get('about', 'Frontend\PagesController@about');
Route::get('contact', 'Frontend\PagesController@contact');

// categories
Route::get('categories', 'Frontend\CategoriesController@listCategories');
Route::get('categories/{url}', 'Frontend\CategoriesController@showCategories');
