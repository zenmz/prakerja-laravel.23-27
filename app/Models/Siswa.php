<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $guarded = ['id'];

    // protected $primaryKey = 'id_siswa';
    // protected $fillabe = [
    //     'nis',
    //     'nama',
    //     'alamat',
    // ];

}
