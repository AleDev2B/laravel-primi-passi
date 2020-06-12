<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/content', function () {
$max = 99;
    return view('content', compact('max'));
});
