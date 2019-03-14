<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hahaha extends Model
{
    protected $table='hahaha';
    protected $fillable=['id','sodienthoai'];
    public $timestamps =false;
    public function hehehe(){
    	return $this->hasMany('App\hehehe');
    }
}
