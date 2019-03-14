<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hehehe extends Model
{
    protected $table='hehehes';
    protected $fillable=['name','heheheid','image'];
    public $timestamps =false;
}
