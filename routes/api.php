<?php

use App\Http\Controllers\ApiTableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('v1/meja', [ApiTableController::class, 'index']);
Route::post('v1/meja/store', [ApiTableController::class, 'store']);
Route::get('v1/meja/detail/{id}', [ApiTableController::class, 'detail']);
Route::put('v1/meja/update/{id}', [ApiTableController::class, 'update']);
Route::delete('v1/meja/destroy/{id}', [ApiTableController::class, 'destroy']);

