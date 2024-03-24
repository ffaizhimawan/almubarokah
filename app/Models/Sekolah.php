<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
    protected $fillable = ['nama_sekolah', 'alamat_sekolah', 'akreditasi', 'ruangan', 'kurikulum', 'jumlah_siswa', 'prestasi', 'jam_belajar', 'eskul', 'no_wa', 'email'];
}
