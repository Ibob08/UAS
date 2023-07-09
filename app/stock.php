<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $table = "tb_stock_mobil";
    protected $primaryKey = 'stock_id';
    protected $fillable = ['stock_kode','stock_nama', 'stock_warna', 'stock_jenis', 'stock_tahun', 'stock_jumlah','stock_harga'];
}
