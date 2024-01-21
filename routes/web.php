<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafController;
use App\Http\Controllers\Petugas_lapanganController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () 
    {

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('staf', StafController::class);
    Route::resource('petugas', Petugas_lapanganController::class);
    Route::get('/surattugas/index', function () {return view('surattugas.index');})->name('index');
});

