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

Route::get('/agama', function () {
    return view('agama');
});

Route::get('/up3ai', function () {
    return view('up3ai');
});

Route::get('/bela_diri', function () {
    return view('bela_diri');
});

Route::get('/olahraga', function () {
    return view('olahraga');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/sosial', function () {
    return view('sosial');
});

Route::get('/senbud', function () {
    return view('senbud');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/blog-grid', function () {
    return view('blog-grid');
});

Route::get('/news-1', function () {
    return view('news-1');
});



Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/kontak', function () {
    return view('kontak');
});