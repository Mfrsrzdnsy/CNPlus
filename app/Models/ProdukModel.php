<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';

    protected $primaryKey = 'kode_produk';
    protected $keyType = 'string';

    protected $fillable = [
        'nama_produk',
        'harga_beli',
        'harga_jual',
        'status',
        'kelompok_produk',
        'stok',
    ];
}
