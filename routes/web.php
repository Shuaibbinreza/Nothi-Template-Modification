<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/temp', function () {
    return view('welcome');
});

Route::get('/e', function () {
    return view('e');
});
