<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrians';
    protected $primaryKey = 'nik';

    protected $fillabile = [
        'nama_pasien',
        'jenis_kelamin',
        'no_antrian',
        'no_handphone',
        'alamat'
    ];
}
