<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('admin.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.register');

Route::get('/meja', [TableController::class, 'index'])->name('admin.table.index');
Route::get('/meja/tambah', [TableController::class, 'create'])->name('admin.table.create');
Route::post('/meja/store', [TableController::class, 'store'])->name('admin.table.store');
Route::get('/meja/edit/{id}', [TableController::class, 'edit'])->name('admin.table.edit');
Route::put('/meja/update/{id}', [TableController::class, 'update'])->name('admin.table.update');
Route::get('/meja/destroy/{id}', [TableController::class, 'destroy'])->name('admin.table.destroy');
