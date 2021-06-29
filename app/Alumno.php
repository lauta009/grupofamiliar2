<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    function familias(){
        return $this->belongsToMany(Familia::class, 'alumno_familias','alumno_id', 'familia_id');
    }
    function escuelas(){
        return $this->belongsTo(Escuela::class);
    }
}
