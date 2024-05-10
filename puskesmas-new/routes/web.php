<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function() {
    return "Selamat Datang Khalid di feerwork";
});

Route::get('/beranda', function() {
    return "Halaman Beranda";
});

Route::get('/Profile', function() {
    return "Halaman Profile";
});
