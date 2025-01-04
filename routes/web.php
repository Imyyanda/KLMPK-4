<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/program_studi', function () {
    return view('program_studi');
})->name('program_studi');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');

Route::get('/ukm', function () {
    return view('ukm');
})->name('ukm');

Route::get('/ppmb-', function () {
    return view('ppmb');
})->name('ppmb');

Route::get('/beasiswa', function () {
    return view('beasiswa');
})->name('beasiswa');

