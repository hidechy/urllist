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
    return view('welcome');
});


Route::get('/urllist', 'Url\UrlController@urllist');
Route::get('/url/{id}/delete', 'Url\UrlController@delete');
Route::get('/url/{id}/tagset', 'Url\UrlController@tagset');
Route::post('/taginput', 'Url\UrlController@taginput');
