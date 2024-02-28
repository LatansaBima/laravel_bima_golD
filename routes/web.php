<?php

use App\Http\Controllers\BelajarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', [BelajarController::class, 'index']);
Route::get('/biodata', [BelajarController::class, 'biodata']);

Route::get('/belajar/{nama}', [BelajarController::class, 'getNama']);
Route::get('/biodata/{nama}', [BelajarController::class, 'getNama']);

Route::get('/pendaftaran', [BelajarController::class, 'pendaftaran']);
Route::post('/pendaftaran/proses', [BelajarController::class, 'proses']);
