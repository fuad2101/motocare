<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');

// Route::view('/', 'landing')->name('landing');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::livewire('/test-binding', 'test-binding')->name('test-binding');
Route::livewire('/booking', 'booking.create')->name('booking.create');

require __DIR__.'/settings.php';
