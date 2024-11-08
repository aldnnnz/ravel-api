<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    /** @use HasFactory<\Database\Factories\PenggunaFactory> */
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp',
    ];
}