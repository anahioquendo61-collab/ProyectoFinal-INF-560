<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('projects', ProjectController::class);

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/users', [AdminController::class, 'users']);
    });

});

require __DIR__.'/auth.php';
