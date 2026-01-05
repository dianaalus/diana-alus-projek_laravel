<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Menampilkan daftar transaksi dan ringkasan saldo.
     * Fungsi ini memperbaiki error "Call to undefined method index()"
     */
    public function index()
    {
        // 1. Mengambil semua data transaksi dari tabel
        $data = Transaksi::orderBy('created_at', 'desc')->get();

        // 2. Menghitung ringkasan kas (Sesuai logika pada gambar error Anda)
        $total_masuk  = Transaksi::where('tipe', 'masuk')->sum('jumlah');
        $total_keluar = Transaksi::where('tipe', 'keluar')->sum('jumlah');
        $saldo_akhir  = $total_masuk - $total_keluar;

        // 3. Mengirim data ke file resources/views/index.blade.php
        return view('index', compact('data', 'total_masuk', 'total_keluar', 'saldo_akhir'));
    }
}