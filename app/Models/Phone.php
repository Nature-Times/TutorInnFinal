<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;

    public function mahasiswas(){
        return $this->belongsTo(Mahasiswa::class);
    }
}