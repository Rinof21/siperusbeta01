<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RuanganController;
use App\Models\Mahasiswa;
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
    return view('dashboard');
});

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function(){
    Route::get('','index')->name('kelolamahasiswa');


});

Route::controller(RuanganController::class)->prefix('ruangan')->group(function(){
    Route::get('','index')->name('kelolaruangan');
    Route::get('tambahruangan','tambahruangan')->name('ruangan.tambah');

});