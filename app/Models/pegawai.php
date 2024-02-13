<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
            'pegawai_nama',
            'pegawai_jabatan',
            'pegawai_umur',
            'pegawai_alamat'
    ];
}