<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micro extends Model
{
    //
    //
    //
    
    protected $hidden = ['id','estado','municipio','created_at','updated_at'];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
   
}
