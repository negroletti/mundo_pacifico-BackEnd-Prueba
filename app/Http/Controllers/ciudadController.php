<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class ciudadController extends Controller
{
    //get todas las ciudades
    public function getCiudades()
    {
        $ciudades = Ciudades::all();
        return response()->json($ciudades, 200);
    }

    //get ciudad por provincia
    public function getCiudadesProvincia($id)
    {
        $ciudad = Ciudades::where('id_provincia', $id)->get();
        return response()->json($ciudad, 200);
    }
    //agregar una ciudad
    public function addCiudad(Request $request)
    {
        $ciudad = new Ciudades();
        $ciudad->nombre_ciudad = $request->input('nombre_ciudad');
        $ciudad->save();
        return response()->json($ciudad, 201);
    }
    //modificar una ciudad
    public function updateCiudad(Request $request, $id)
    {
        $ciudad = Ciudades::find($id);
        if (!$ciudad) {
            return response()->json(['mensaje' => 'no se encuentra la ciudad'], 404);
        }
        $ciudad->nombre_ciudad = $request->input('nombre_ciudad');
        $ciudad->id_provincia = $request->input('id_provincia');
        $ciudad->save();
        return response()->json($ciudad, 200);
    }
    //lsitar ciudad por id
    public function getCiudad($id)
    {
        $ciudad = Ciudades::find($id);
        if (!$ciudad) {
            return response()->json(['mensaje' => 'no se encuentra la ciudad'], 404);
        }
        return response()->json($ciudad, 200);
    }
}
