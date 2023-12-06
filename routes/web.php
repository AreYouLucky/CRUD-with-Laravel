<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\itemController::class, 'index'])->name('item.index');
Route::post('/submit',[App\Http\Controllers\itemController::class, 'store'])->name('item.store');
Route::delete('/destroy/{id}',[App\Http\Controllers\itemController::class, 'destroy'])->name('item.destroy');
Route::get('/editPage/{id}', [App\Http\Controllers\itemController::class, 'show']);
Route::put('/items/{id}', [App\Http\Controllers\itemController::class, 'update']);