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

Route::get('/', function () {  return view('welcome');});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::get('/lupapw', [App\Http\Controllers\AuthController::class, 'lupa_pw']);

Route::resource('/profilpesantren', App\Http\Controllers\ProfilPesantrenController::class);
Route::resource('/pengaturan', App\Http\Controllers\PengaturanController::class);
Route::resource('/mapel', App\Http\Controllers\MapelController::class);
Route::resource('/tingkatkelas', App\Http\Controllers\TingkatKelasController::class);
Route::resource('/kelas', App\Http\Controllers\KelasController::class);
Route::resource('/guru', App\Http\Controllers\GuruController::class);
Route::resource('/santri', App\Http\Controllers\SantriController::class);



