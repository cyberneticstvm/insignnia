<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/portfolios/varkala', function () {
    return view('portfolios.varkala');
})->name('varkala');
Route::get('/portfolios/trivandrum', function () {
    return view('portfolios.trivandrum');
})->name('trivandrum');
Route::get('/portfolios/pandalam', function () {
    return view('portfolios.pandalam');
})->name('pandalam');
