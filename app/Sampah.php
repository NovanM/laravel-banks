<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    //
    protected $fillable = ['nama','harga','gambar','deskripsi','satuan','jenis_sampah'];
    
}
