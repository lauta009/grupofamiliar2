<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    function Alumnos(){
        return $this->belongsToMany(Alumno::class);
    }
}
