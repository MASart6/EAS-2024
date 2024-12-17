<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    use HasFactory;

    protected $table = 'jadwalujian';
    protected $primaryKey = 'id'; // Tentukan primary key

    protected $fillable = [
        'tanggalujian',
        'jammulai',
        'namamatakuliah',
    ];
}
