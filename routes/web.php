<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
use App\Models\Pegawai;
use App\Models\Jabatan;

Route::resource('jabatan', JabatanController::class);
Route::resource('pegawai', PegawaiController::class);
Route::get('/', function () {
    return view('welcome', [
        'totalPegawai' => Pegawai::count(),
        'totalJabatan' => Jabatan::count(),
        'latestPegawai' => Pegawai::with('jabatan')->latest()->take(5)->get(),
    ]);
})->name('home');
