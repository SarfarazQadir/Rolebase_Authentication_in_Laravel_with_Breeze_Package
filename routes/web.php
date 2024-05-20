<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [App\Http\Controllers\Controller::class, 'index'])->name('home');
Route::get('/adminhome', [App\Http\Controllers\ResourceController::class, 'index'])->name('adminhome');
Route::get('/addproduct', [App\Http\Controllers\ResourceController::class, 'create'])->name('addproduct');
Route::get('/showproduct', [App\Http\Controllers\ResourceController::class, 'show'])->name('showproduct');

require __DIR__.'/auth.php';
