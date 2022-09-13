<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestSetor extends Model
{
    //
    protected $fillable = ['warga_id','sampah_id','tanggal_pengambilan'];
    public function warga(){
        return $this->hasMany(User::class,'id', 'warga_id');
    }
    public function sampah(){
        return $this->hasOne(Sampah::class,'id', 'sampah_id');
    }
}
