<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tendik extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pendidik', 'jabatan_pendidik'];
}
