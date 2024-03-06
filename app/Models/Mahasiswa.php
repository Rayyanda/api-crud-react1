<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'mhs_id',
        'nim',
        'nama',
        'jenis_kelamin',
        'prodi_id',
        'fakultas_id',
        'tanggal_lahir',
        'alamat',
        'email'
    ];

}
