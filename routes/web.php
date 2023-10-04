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
// TABLE SISWA
Route::get('/siswa', [RouteController::class, 'index'])->name('siswa');
Route::get('/tambahsiswa', [RouteController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertsiswa', [RouteController::class, 'insertsiswa'])->name('insertsiswa');
Route::get('/tampilsiswa/{id}', [RouteController::class, 'tampilsiswa'])->name('tampilsiswa');
Route::post('/updatepetugas/{id}', [RouteController::class, 'updatesiswa'])->name('updatesiswa');
Route::get('/delete/{id}', [RouteController::class, 'delete'])->name('delete');

// TABLE PETUGAS
Route::get('/petugas', [RouteController::class, 'petugas'])->name('petugas');
Route::get('/tambahpetugas', [RouteController::class, 'tambahpetugas'])->name('tambahpetugas');
Route::post('/insertpetugas', [RouteController::class, 'insertpetugas'])->name('insertpetugas');
Route::get('/tampilpetugas/{id}', [RouteController::class, 'tampilpetugas'])->name('tampilpetugas');
Route::post('/updatepetugas/{id}', [RouteController::class, 'updatepetugas'])->name('updatepetugas');
Route::get('/deletepetugas/{id}', [RouteController::class, 'deletepetugas'])->name('deletepetugas');


// TABLE KELAS
Route::get('/kelas', [RouteController::class, 'kelas'])->name('kelas');
Route::get('/tambahkelas', [RouteController::class, 'tambahkelas'])->name('tambahkelas');
Route::post('/insertkelas', [RouteController::class, 'insertkelas'])->name('insertkelas');
Route::get('/tampilkelas/{id}', [RouteController::class, 'tampilkelas'])->name('tampilkelas');
Route::post('/updatekelas/{id}', [RouteController::class, 'updatekelas'])->name('updatekelas');
Route::get('/deletekelas/{id}', [RouteController::class, 'deletekelas'])->name('deletekelas');

// TABLE SPP
Route::get('/spp', [RouteController::class, 'spp'])->name('spp');
Route::get('/tambahspp', [RouteController::class, 'tambahspp'])->name('tambahspp');
Route::post('/insertspp', [RouteController::class, 'insertspp'])->name('insertspp');
Route::get('/tampilspp/{id}', [RouteController::class, 'tampilspp'])->name('tampilspp');
Route::post('/updatespp/{id}', [RouteController::class, 'updatespp'])->name('updatespp');
Route::get('/deletespp/{id}', [RouteController::class, 'deletespp'])->name('deletespp');

// TABLE HISTORY
Route::get('/History', [RouteController::class, 'history']);
