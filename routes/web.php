<?php

use App\Http\Controllers\PubUserController;
use Illuminate\Support\Facades\Route;

// public routes

Route::get('/home', [PubUserController::class, 'home']
)->name('home');

Route::get('/contact_us', [PubUserController::class, 'contact_us']
)->name('contact_us');

Route::post('/contact_us_info', [PubUserController::class, 'contact_us_info']
)->name('contact_us_info');






