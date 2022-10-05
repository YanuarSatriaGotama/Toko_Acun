<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elektronik extends Model
{
    use HasFactory;

    protected $table = 'elektroniks';
    protected $fillable = ['id','nama_barang', 'harga', 'jenis'];
}
