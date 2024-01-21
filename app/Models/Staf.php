<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jabatan', 'instansi','dpt_bagian'
    ];
}
