<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable =['npm', 'nama_mahasiswa', 'jk', 'tgl_lahir', 'alamat'];
}
