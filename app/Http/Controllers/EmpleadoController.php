<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
   
    public function byEmpleado($id){
        return Empleado::where('empresa_id', $id)->get();
        //select * from empleados WHERE empresa_id = id;
        //select * from empleados WHERE empresa_id = 1,2,3 etc; 
         
    }
    
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
