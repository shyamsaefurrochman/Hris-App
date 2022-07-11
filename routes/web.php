<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AbsensiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/registrasi', [LoginController::class, 'create'])->name('registrasi');

Route::post('/processregistrasi', [LoginController::class, 'store'])->name('processregistrasi');

Route::post('/processlogin', [LoginController::class, 'proccesslogin'])->name('processlogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::resource('admin/dashboard', AdminController::class);
    Route::resource('admin/pegawai', PegawaiController::class);
    Route::post('admin/pegawai/delete', [PegawaiController::class, 'delete'])->name('pegawai.delete');
    Route::resource('admin/absensi', AbsensiController::class);
    Route::post('admin/absensi/delete', [AbsensiController::class, 'delete'])->name('absensi.delete');
});
