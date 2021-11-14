<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;



class calleController extends Controller
{
    //get calles
    public function getCalles()
    {
        $calles = Calles::all();
        return response()->json($calles);
    }
    //get nombre_calle, nombre_ciudad, nombre_provincia, nombre_region
    public function getCallesNombre($id)
    {
        $respuesta = Calles::join('ciudades', 'calles.id_ciudad', '=', 'ciudades.id')
            ->join('provincias', 'ciudades.id_provincia', '=', 'provincias.id')
            ->join('regions', 'provincias.id_region', '=', 'regions.id')
            ->where('calles.id', '=', $id)
            ->select('calles.nombre_calle', 'ciudades.nombre_ciudad', 'provincias.nombre_provincia', 'regions.nombre_region')
            ->get(); 
        return response()->json($respuesta);
    } 
    //post provincia
    public function addCalle(Request $request)
    {
        $calles = new Calles();
        $calles->nombre_calle = $request->input('nombre_calle');
        $calles->id_ciudad = $request->input('id_ciudad');
        $calles->save();
        return response()->json($calles);
    }
    //modificar una calle
    public function updateCalle(Request $request, $id)
    {
        $calles = Calles::find($id);
        if(!$calles)
        {
            return response()->json(['mensaje' => 'No se encuentra la calle'], 404);
        }
        $calles->nombre_calle = $request->input('nombre_calle');
        $calles->id_ciudad = $request->input('id_ciudad');
        $calles->save();
        return response()->json($calles);
    }
    //listar calle por id
    public function getCalle($id)
    {
        $calles = Calles::find($id);
        if(!$calles)
        {
            return response()->json(['mensaje' => 'No se encuentra la calle'], 404);
        }
        return response()->json($calles);
    }
}
