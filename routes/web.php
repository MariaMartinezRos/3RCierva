<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/recycle', function () {
    return view('recycle');
})->name('recycle');

Route::get('/reduce', function () {
    return view('reduce');
})->name('reduce');

Route::get('/reuse', function () {
    return view('reuse');
})->name('reuse');

require __DIR__.'/auth.php';




//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//Route::get('/test', function () {
//    return view('test');
//})->middleware(['auth', 'verified'])->name('test');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
