<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
});

Route::get('/contactpage', function () {
    return view('contactpage');
});

Route::get('/aboutpage', function () {
    return view('aboutpage');
});
