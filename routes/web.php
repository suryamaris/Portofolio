<?php

use Illuminate\Support\Facades\Redirect;
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
    return view('index');
});
Route::get('/movieAPI', function () {
    return view('movieAPI');
});
Route::get('/blogger', function () {
    return view('blogger');
});
Route::get('/hosting', function () {
    return view('hosting');
});
Route::get('/kepegawaian', function () {
    return view('kepegawaian');
});
Route::get('/kas', function () {
    return view('kas');
});
Route::get('/project6', function () {
    return view('project6');
});

// Movie API
Route::get('/movieRedirect', function () {
    return redirect('http://localhost:8080/rest-api/movie-api/');
});
Route::get('/movieGit', function () {
    return redirect('https://github.com/suryamaris/learn-rest-api/tree/main/movie-api');
});

// Blogger
Route::get('/bloggerRedirect', function () {
    return redirect('http://coba-laravel.test/blog');
});
Route::get('/bloggerGit', function () {
    return redirect('https://github.com/suryamaris/Learn-Laravel-Blog-Website-');
});


// Hosting
Route::get('/hostingRedirect', function () {
    return redirect('http://localhost:8080/hosting/datahosting/sistem');
});
Route::get('/hostingGit', function () {
    return redirect('https://github.com/suryamaris/Pemilihan-Hosting-Metode-MOORA');
});

// Kepegawaian
Route::get('/kepegawaianRedirect', function () {
    return redirect('http://localhost:8080/pegawai/');
});
Route::get('/kepegawaianGit', function () {
    return redirect('https://github.com/suryamaris/kepegawaian');
});

// kas
Route::get('/kasGit', function () {
    return redirect('https://github.com/suryamaris/Kas-Klinik-MySqlDB');
});