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
Route::get('/t1', function () {
    return view('master');//myCarousel(連播廣告還是有問題)
});

Route::get('/test1', function () {
    return view('test1');//看起來派得上用場的東東
});
Route::get('/test2', function () {
    return view('test2');//進階
});
