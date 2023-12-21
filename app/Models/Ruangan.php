<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_ruangan',
        'kode_ruangan',
        'nama_ruangan',
        'foto_ruangan',
        'keterangan',
        'prodi_id',
    ];
}
