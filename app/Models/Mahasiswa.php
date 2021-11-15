<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "tbl_mhs";
    public $timestamps = false;

    protected $fillable = [
        'nim',
        'namamhs',
        'jk',
        'alamat',
        'kota',
        'email',
        'foto'
    ];
}
