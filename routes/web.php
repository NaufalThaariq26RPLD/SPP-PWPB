<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

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

Route::get('/', [HomeController::class, 'admin']);
Route::get('/Siswa', [RouteController::class, 'index']);
Route::get('/Petugas', [RouteController::class, 'petugas']);
Route::get('/Kelas', [RouteController::class, 'kelas']);
Route::get('/Spp', [RouteController::class, 'spp']);
Route::get('/History', [RouteController::class, 'history']);
