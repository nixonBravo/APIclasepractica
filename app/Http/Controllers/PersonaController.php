<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /* $persnas = DB::table('personas')
        ->join('users', 'personas.id', '=', 'users.persona_id')
        ->join('rols', 'users.rol_id', '=', 'rols.id')
        ->select('personas.*', 'users.name', 'rols.rol')
        ->get();
        return response()->json([
            'personas' => $persnas,
        ]); */
        $users = DB::table('users')
        ->join('personas', 'users.persona_id', '=', 'personas.id')
        ->join('rols', 'users.rol_id', '=', 'rols.id')
        ->select('personas.nombre', 'users.name', 'rols.rol')
        ->where('estado', true)
        ->get();
        return response()->json([
            'users' => $users,
        ]);
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
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
