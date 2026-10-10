<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'index'])->name('admin.index');

Route::get('/meja', [TableController::class, 'index'])->name('admin.table.index');
Route::get('/meja/tambah', [TableController::class, 'create'])->name('admin.table.create');
