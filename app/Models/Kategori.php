<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];


    public function sub_kategoris() {
        return $this->hasMany(SubKategori::class, 'kategori_id', 'id');
    }
}
