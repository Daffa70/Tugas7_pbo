<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MahasiswaController::class, 'index'])->name('index');
Route::get('/create',  [MahasiswaController::class, 'create'])->name('create');
Route::post('/store',  [MahasiswaController::class, 'store'])->name('store');
Route::get('/edit/{id}',  [MahasiswaController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [MahasiswaController::class, 'destroy'])->name('destroy');