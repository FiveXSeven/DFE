<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // LES ROUTES DU CRUD
    // LES ROUTES DU CRUD

    Route::get('/dashboard/create',[ApprenantController::class, 'create'])->name('user.create')->middleware('admin');
    Route::post('/dashboard',[ApprenantController::class, 'store'])->name('user.store');
    Route::get('/dashboard/index',[ApprenantController::class, 'index'])->name('user.index');
Route::get('/dashboard/edit/{id}', [ApprenantController::class, 'edit'])->name('user.edit')->middleware('admin');
 Route::put('/dashboard/edit/{id}', [ApprenantController::class, 'update'])->name('user.update');
Route::delete('/dashboard/delete/{id}', [ApprenantController::class, 'destroy'])->name('user.destroy')->middleware('admin');

// ADMIN ROUTES
// ADMIN ROUTES

    Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
