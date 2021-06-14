<?php

namespace App\Http\Controllers;
use App\Alumno_familia;
use App\Familia;
use App\Alumno;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->paginate){
            $familias = Familia::with('alumnos')->where('apellido', 'LIKE', '%'.$request->search.'%')->orderBy('apellido', 'ASC')->paginate(50);
        }else{
            $familias = Familia::with('alumnos')->where('apellido','LIKE', '%'.$request->search.'%')->orderBy('apellido', 'ASC')->get();
        }
        foreach($familias as $familia){
            $familia->alumnos();
        }
        return response()->json($familias);
        


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $familia = New Familia;
        $familia->apellido = $request->nombre;
        $familia->domicilio = $request->domicilio;
        $integrantes = $request->integrantes;
        if($familia->save()){
            foreach ($integrantes as $integrante) {
                
                $familia->alumnos()->attach($integrante["id"]);   
            }
        return response()->json(['success' => true, 'familia' => $familia]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function show(Familia $familia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia $familia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia $familia)
    {
        //
    }
}
