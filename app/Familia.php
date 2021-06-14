<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    function alumnos(){
        return $this->belongsToMany(Alumno::class, 'alumno_familias','familia_id','alumno_id');
    }
}
