<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = ['id','nomor_barang','nama_barang','harga','stock'];

    protected $hidden = ['create_at', 'update_at'];
}
