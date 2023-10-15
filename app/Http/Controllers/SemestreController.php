<?php

namespace App\Http\Controllers;
use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    // Obtén todos los cursos para mostrar en la vista
    $semestres = Semestre::all();


    // Muestra la vista con la lista de cursos
    return view('semestres')->with('semestres', $semestres);
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
        $request->validate([
            'año' => 'required|integer',
            'numero' => 'required|integer',
        ]);
        
        Semestre::create([
            'año' => $request->año,
            'numero' => $request->numero,
        ]);
    
        return redirect()->route('semestres')->with('success', 'Semestre creado exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
