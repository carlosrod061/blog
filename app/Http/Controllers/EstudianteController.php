<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
      return view('estudiante.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante -> nombre = $request->input('nombre');
        $estudiante -> numControl = $request->input('numControl');
        $estudiante -> carrera = $request->input('carrera');

        if($estudiante->save()){
            return redirect()->back()->with('success','saved successfully!');
        }else{
            return redirect()->back()->with('failed','Could not save!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view("estudiante.edit",compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante -> nombre = $request->input('nombre');
        $estudiante -> numControl = $request->input('numControl');
        $estudiante -> carrera = $request->input('carrera');
        
        if($estudiante->save()){
            return redirect()->back()->with('success','Update successfully!');
        }else{
            return redirect()->back()->with('failed','Could not save!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Estudiante::destroy($id)){
            return redirect()->back()->with('deleted','Delete successfully');
        }
        return redirect()->back()->with('delete-failed','Could not delete!');
    }
}
