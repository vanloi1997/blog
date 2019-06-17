<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table='tintuc';
    public function loaitin(){
        return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
    }
    public function user(){
        return $this->belongsTo('App\user','idUser','id');
    }
}
