<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/ppmb', function () {
    return view('ppmb');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});
