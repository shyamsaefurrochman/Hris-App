<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'tb_absensi';
    protected $primarykey = 'id_absensi';
    protected $fillable = [
        'id_user',
        'keterangan',
        'created_at',
        'updated_at',
    ];

}
