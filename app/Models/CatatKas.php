<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatKas extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * Secara default Laravel akan mencari tabel bernama 'catat_kas' (jamak).
     * Jika nama tabel Anda berbeda, tentukan di sini.
     */
    protected $table = 'catat_kas';

    /**
     * Kolom-kolom yang diperbolehkan untuk diisi (Mass Assignment).
     * Ini harus sesuai dengan kolom yang Anda buat di file Migration.
     */
    protected $fillable = [
        'tanggal',
        'keterangan',
        'tipe',   // Isinya biasanya 'masuk' atau 'keluar'
        'jumlah', // Nominal uang
    ];

    /**
     * Opsional: Menentukan tipe data kolom agar otomatis dikonversi oleh Laravel.
     */
    protected $casts = [
        'tanggal' => 'date',
        'jumlah' => 'integer',
    ];
}