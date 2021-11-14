<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincias;

class provinciaController extends Controller
{
    //get provincias
    public function getProvincias()
    {
        $provincias = Provincias::all();
        return response()->json($provincias, 200);
    }
    //listar provincias por region
    public function getProvinciasRegion($id)
    {
        $provincias = Provincias::where('id_region', $id)->get();
        return response()->json($provincias, 200);
    }
    //agregar una provincia
    public function addProvincia(Request $request)
    {
        $provincia = new Provincias();
        $provincia->nombre_provincia = $request->input('nombre_provincia');
        $provincia->id_region = $request->input('id_region');
        $provincia->save();
        return response()->json($provincia, 201);
    }
    //modificar una provincia
    public function updateProvincia(Request $request, $id)
    {
        $provincia = Provincias::find($id);
        if (!$provincia) {
            return response()->json(['mensaje' => 'No se encuentra la provincia con id: ' . $id], 404);
        }
        $provincia->nombre_provincia = $request->input('nombre_provincia');
        $provincia->id_region = $request->input('id_region');
        $provincia->save();
        return response()->json($provincia, 200);
    }
    //listar provincia por id
    public function getProvincia($id)
    {
        $provincia = Provincias::find($id);
        if (!$provincia) {
            return response()->json(['mensaje' => 'No se encuentra la provincia con id: ' . $id], 404);
        }
        return response()->json($provincia, 200);
    }
}
