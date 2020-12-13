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

Route::get('/', function () {
    return view('public.layouts.index');
});
Route::get('test/{id}/{old}',"TestController@index");

Route::prefix('product')->group(function () {
    // http://localhost:8000/product/list
    Route::get('/list', "ProductController@index");

    // http://localhost:8000/product/edit/2
    Route::get('/edit/{id}', "ProductController@edit");

    // http://localhost:8000/product/create
    Route::post('/create', "ProductController@create");

    // http://localhost:8000/product/delete/2
    Route::get('/delete/{id}', "ProductController@delete" );

    // http://localhost:8000/product/update/2
    Route::put('/update/{id}', "ProductController@update");
});
Route::get('/introduce', function () {
    return view('public.introduce');
});
