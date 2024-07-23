<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Default route, returning the welcome view
Route::get('/', function () {
    return view('home');
});

// Dashboard route, protected by 'auth' and 'verified' middleware
Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');
//
Route::get("/redirects" , [HomeController::class, "redirects"] );
// Home route, returning the home view
Route::get('/home', function () {
    return view('home');
})->name('home');

// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Load additional authentication routes
require __DIR__.'/auth.php';
