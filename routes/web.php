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

Route::get('/game', function () {
    return view('Layout.Master');
})->name('game.index');

Route::get('/videotutorial', function () {
    return view('tutorial.tutorial');
});

Route::get('/belajarangka', function () {
    return view('angka.level1');
})->name('angka.index');

Route::get('/belajarhewan', function () {
    return view('hewan.level1');
})->name('hewan.index');

Route::get('/belajarhuruf', function () {
    return view('huruf.level1');
})->name('huruf.index')
;
Route::get('/belajarwarna', function () {
    return view('warna.level1');
})->name('warna.index');