<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_toko',
        'nm_toko',
        'almt_toko',
    ];
    protected $primaryKey = "id_toko";
}
