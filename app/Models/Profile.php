<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'nik_1',
        'nik_2',
        'nama_lengkap',
        'panggilan',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'agama',
        'pekerjaan',
        'status',
        'kontak_handphone',
        'email',
        'deskripsi',
        'photo'
    ];
}
