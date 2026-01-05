<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

// Halaman utama
Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');

// Aksi Simpan & Hapus
Route::post('/simpan', [TransaksiController::class, 'store'])->name('transaksi.simpan');
Route::delete('/hapus/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.hapus');

// Aksi Cetak PDF
Route::get('/cetak-pdf', [TransaksiController::class, 'cetakPDF'])->name('transaksi.pdf');