<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController')->name('site.home');

    Route::get('produtos', 'CategoryController@index')->name('site.products');
    Route::get('produtos/{category}', 'CategoryController@show')->name('site.products.category');

    Route::get('blog', 'BlogController')->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', 'ContactController@index')->name('site.contact');
    Route::post('contato', 'ContactController@form')->name('site.contact.form');
});
