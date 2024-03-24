<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    use HasFactory;
    protected $fillable = ['uang_gedung', 'uang_masuk', 'spp'];
}
