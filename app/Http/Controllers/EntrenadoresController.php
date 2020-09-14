<?php

namespace App\Http\Controllers;

use App\Models\Entrenadores;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EntrenadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadores = Entrenadores::all();
        return view('entrenadores.index')->with('entrenadores', $entrenadores);
    }

    public function dataTable()
    {
        return DataTables::of(Entrenadores::select('id', 'nombre', 'apellido', 'direccion', 'telefono')->get())
            ->addColumn('btn', 'entrenadores.dataTable.btn' )
            ->rawColumns(['btn'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrenadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mpdels\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenadores $entrenadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mpdels\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenadores $entrenadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mpdels\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenadores $entrenadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mpdels\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenadores $entrenadores)
    {
        //
    }
}
