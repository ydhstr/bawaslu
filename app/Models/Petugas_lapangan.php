<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas_lapangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jabatan', 'emails'
    ];
}
