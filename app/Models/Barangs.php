<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangs extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','harga','stok','id_merek'];
    protected $visible = ['nama_barang','harga','stok','id_merek'];

    public function Mereks()
    {
        return $this->belongsTo(Mereks::class, 'id_merek');
    }
}
