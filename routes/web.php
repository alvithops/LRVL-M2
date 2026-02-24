<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di Laravel';
});

// Route Statis
Route::get('/profil', function () {
    return 'Ini adalah halaman profile';
});

// Route Parameter
Route::get('halo/{nama}', function ($nama) {
    return 'Halo ' . $nama;
});