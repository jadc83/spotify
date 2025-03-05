<?php

use App\Livewire\MisAlbumes;
use App\Livewire\MisCanciones;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('mis-canciones', MisCanciones::class);
Route::get('mis-albumes', MisAlbumes::class);

require __DIR__.'/auth.php';
