<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/blogsatu', function () {
    return view('blogsatu');
});

Route::get('/blogAI', function () {
    return view('blogAI');
});

Route::get('/bloglms', function () {
    return view('bloglms');
});

Route::get('/blogvr', function () {
    return view('blogvr');
});

Route::get('/profil', function () {
    return view('profil');
});
