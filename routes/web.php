<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', [Controller::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
