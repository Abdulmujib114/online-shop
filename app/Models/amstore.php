<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amstore extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'barang', 'alamat'];
}
