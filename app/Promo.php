<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'judul', 'deskripsi', 'gambar'
    ];

}
