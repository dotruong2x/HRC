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
    return view('pages.home');
});


Route::get('lienhe', function () {
    return view('pages.lienhe');
})->name('lienhe');

Route::get('tinTuc', function () {
	return view('pages.tinTuc');
})->name('tinTuc');

Route::get('traiNghiem', function () {
	return view('pages.traiNghiem');
})->name('traiNghiem');

Route::get('dichvu', function () {
	return view('pages.dichvu');
})->name('dichvu');

Route::get('gioithieu', function () {
	return view('pages.gioithieu');
})->name('gioithieu');
Route::get('khoahoc', function () {
	return view('pages.khoahoc');
})->name('khoahoc');

