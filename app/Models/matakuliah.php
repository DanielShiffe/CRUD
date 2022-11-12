<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = "matakuliah";

    protected $fillable = ['id','kode_matakuliah','nama_matakuliah','sks'];
}
