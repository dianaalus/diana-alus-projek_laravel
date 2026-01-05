<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatKas;

class KasController extends Controller
{
    public function index()
    {
        // Ambil data dari yang terbaru
        $data_kas = CatatKas::orderBy('tanggal', 'desc')->get();
        
        // Hitung saldo otomatis
        $total_masuk = CatatKas::where('tipe', 'masuk')->sum('jumlah');
        $total_keluar = CatatKas::where('tipe', 'keluar')->sum('jumlah');
        $saldo = $total_masuk - $total_keluar;

        return view('kas.index', compact('data_kas', 'saldo'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'tipe' => 'required|in:masuk,keluar',
            'jumlah' => 'required|numeric',
        ]);

        // Simpan ke database
        CatatKas::create($request->all());

        return redirect()->back()->with('success', 'Data kas berhasil ditambahkan!');
    }
}