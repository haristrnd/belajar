<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable = [
        'nama',
        'merek',
        'harga_per_hari',
        'status',
        'nama_penyewa',
        'tanggal_sewa',
        'tanggal_kembali',
    ];
}
