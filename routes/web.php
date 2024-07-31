<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pub_views/home');
})->name('home');






