<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $table = 'keuangan';

    protected $fillable = [
        'id_kategori',
        'id_pengguna',
        'jumlah',
        'tanggal',
        'deskripsi',
        'jenis',
    ];

    public function kategori()
    {
        return $this->hashOne(Kategori::class, 'id', 'id_kategori');
    }

    public function pengguna()
    {
        return $this->hashOne(User::class, 'id', 'id_pengguna');
    }
}
