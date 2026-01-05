<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // Nama tabel sesuai di migrasi gambar Anda
    protected $table = 'transaksis'; 

    protected $fillable = ['keterangan', 'jumlah', 'tipe'];
}