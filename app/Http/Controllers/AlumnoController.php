<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        if($request->paginate){
            
            $alumnos = Alumno::where('dni', 'LIKE', '%'.$request->search.'%')->orderBy('apellido', 'ASC')->paginate(50);
        }else{
            $alumnos = Alumno::where('dni', 'LIKE', '%'.$request->search.'%')->orderBy('apellido', 'ASC')->get();
        }
        return response()->json($alumnos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->dni = $request->dni;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->edad = $request->edad;
        $alumno->sexo = $request->sexo;
        $alumno->lugar_nacimiento = $request->lugar_nacimiento;
        $alumno->nombre = $request->nombre;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
