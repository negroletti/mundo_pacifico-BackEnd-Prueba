<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions;

class regionController extends Controller
{
    //listar todas las regiones
    public function getRegiones(){
        $regiones = Regions::all();
        return response()->json($regiones, 200);
    }
    //agregar una region
    public function addRegion(Request $request){
        $region = new Regions();
        $region->nombre_region = $request->input('nombre_region');
        $region->save();
        return response()->json($region, 201);
    }
    //modificar una region
    public function updateRegion(Request $request, $id){
        $region = Regions::find($id);
        if(!$region){
            return response()->json(['mensaje' => 'No se encuentra la region'], 404);
        }
        $region->nombre_region = $request->input('nombre_region');
        $region->save();
        return response()->json($region, 200);
    }
}
