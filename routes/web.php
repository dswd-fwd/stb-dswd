<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('public/Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact-us', function () {
    return Inertia::render('public/ContactUs');
})->name('contact us');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
