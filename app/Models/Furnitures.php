<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furnitures extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_barang',
        'hrg_barang',
        'qty'
    ];
}
