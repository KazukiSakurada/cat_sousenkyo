<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'WelcomeController@contact');
Route::get('/about', function () {
    $data = [];
    $data ["first_name"] = "Luke";
    $data ["last_name"] = "Skywalker";
    return view('pages.about', $data);
    });
Route::get('/database', function () {
    $cats = DB::table('cat_info')->get();
    return view('pages.database', ['name' => $cats]);
});
//Route::get('/about', 'PagesController@about');
