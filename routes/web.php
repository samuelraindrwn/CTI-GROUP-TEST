<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/confirmation', function () {
    return view('pages.confirmation');
});