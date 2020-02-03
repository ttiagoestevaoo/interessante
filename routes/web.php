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
    return view("contact");
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('/articles', 'ArticlesController',[
    'names' => [
        'index' => 'articles.index',
        'show' => 'articles.show',
        'edit' => 'articles.edit',
        'create' => 'articles.create',
        'store' => 'articles.store'
    ]]);
