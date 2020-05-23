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
})->name('index');
Route::get('/invite', function () {
    return view('invite');
})->name('invite');
Route::get('/help', function () {
    return view('help');
})->name('help');
Route::get('/promo', function () {
    return view('promo');
})->name('promo');
Route::get('/media', function () {
    return view('media');
})->name('media');
