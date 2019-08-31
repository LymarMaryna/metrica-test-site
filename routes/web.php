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

Route::get('/', function () {return view('home');})->name('default');
Route::get('/blog', function () {return view('blog');})->name('blog');
Route::get('/about-us', function () {return view('about-us');})->name('about-us');
Route::get('/news', function () {return view('news');})->name('news');
Route::get('/contacts', function () {return view('contacts');})->name('contacts');
Route::get('/user', function () {return view('user');})->name('user');
Route::get('/login', function () {return view('login');})->name('login');
