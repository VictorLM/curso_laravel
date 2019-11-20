<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    function categoria(){
        return $this->hasOne('App\Categoria');
    }
}
