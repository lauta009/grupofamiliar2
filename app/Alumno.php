<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    function familias(){
        return $this->belongsToMany(Familia::class);
    }
    function Escuelas(){
        return $this->belongsTo(Escuela::class);
    }
}
