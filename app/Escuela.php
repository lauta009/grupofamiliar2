<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    function Alumnos(){
        return $this->hasMany(Alumno::class);
    }
}
