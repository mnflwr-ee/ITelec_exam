<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');


    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])
    Route::get('employee', [App\Http\Controllers\employeecontroller::class, ''])
    Route::get('employee', [App\Http\Controllers\employeecontroller::class, ''])
    Route::post('employee', [App\Http\Controllers\employeecontroller::class, ''])
    Route::('employee/{id}/edit', [App\Http\Controllers\employeecontroller::class, 'edit'])
    Route::('employee/{id}/edit', [App\Http\Controllers\employeecontroller::class, 'update'])
    Route::('employee/{id}/delete', [App\Http\Controllers\employeecontroller::class, 'destroy'])

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
