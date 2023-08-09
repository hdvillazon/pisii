<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Matriculados;
use Illuminate\Http\Request;

class MatriculadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programas = Programa::orderBy('nombre')
        ->with('matriculados')
		->get();

		$data = [
			'status' => 200,
			'programas' => $programas
		];

		return response()->json($data);
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Matriculados $matriculados)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matriculados $matriculados)
    {
        $data = [
			'status' => 200,
			'matriculados' => $matriculados
		];

		return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matriculados $matriculados)
    {

        $matriculados->cantidad = $request->cantidad;
		$matriculados->programa_id = $request->programa_id;
		$matriculados->save();

		$data = [
			'status' => 200,
			'matriculados' => $matriculados
		];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matriculados $matriculados)
    {
    
    }
}
