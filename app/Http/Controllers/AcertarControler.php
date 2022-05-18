<?php

namespace App\Http\Controllers;

use App\Models\Acertar;
use Illuminate\Http\Request;

class AcertarControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create(Request $request)
    {
        $min=1;     //Guarda el valor minimo del rango en el que va a estar el número a acertar
        $max=10000000000;  //Guarda el valor máximo del rango en el que va a estar el número a acertar
        $fin=false;
        $numLe=$request->input('numero'); //Número leido del formulario
        $numGe=0;
        /*
            Generamos un número y comprobamos que es el que buscamos.
            Sí lo es lo mandamos a la vistapara que lo muestre.
            Si  no lo es comprobamos se es mayor o menor al que buscamos. Si es mayor establecemos el rango de busqueda con ese número como máximo. Si es menor lo ponemos como minimo del rango de busqueda
        */
        do {
            $numGe=Acertar::crear($min,$max); //Número generado por el ordenador
            if($numLe==$numGe)
                {
                    $fin=true;
                }
            elseif($numLe<$numGe)
            {
                $max=$numGe;
            }
            else
            {
                $min=$numGe;
            }

        } while (!$fin);
   
     return view ('welcome', ['numGen'=>$numGe]);
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
     * @param  \App\Models\Acertar  $acertar
     * @return \Illuminate\Http\Response
     */
    public function show(Acertar $acertar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acertar  $acertar
     * @return \Illuminate\Http\Response
     */
    public function edit(Acertar $acertar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acertar  $acertar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acertar $acertar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acertar  $acertar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acertar $acertar)
    {
        //
    }
}
