<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $fillable = [
        'nama_mahasiswa',
        'jurusan',
        'birthday',
        'gender',
        'email',
        'alamat',
    ];
}

