<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('regiones','App\Http\Controllers\regionController@getRegiones');
Route::get('provincias','App\Http\Controllers\provinciaController@getProvincias');
Route::get('provincias/region/{id}','App\Http\Controllers\provinciaController@getProvinciasRegion');
Route::get('ciudades','App\Http\Controllers\ciudadController@getCiudades');
Route::get('ciudades/provincia/{id}','App\Http\Controllers\ciudadController@getCiudadesProvincia');
Route::get('calles','App\Http\Controllers\calleController@getCalles');
Route::get('calles/id/{id}', 'App\Http\Controllers\calleController@getCallesNombre');

//Route::post('regiones/add','App\Http\Controllers\regionController@addRegion');
//Route::post('provincias/add','App\Http\Controllers\provinciaController@addProvincia');
//Route::post('ciudades/add','App\Http\Controllers\ciudadController@addCiudad');
Route::post('calles/add','App\Http\Controllers\calleController@addCalle');

//Route::put('regiones/{id}','App\Http\Controllers\regionController@updateRegion');
//Route::put('provincias/{id}','App\Http\Controllers\provinciaController@updateProvincia');
//Route::put('ciudades/{id}','App\Http\Controllers\ciudadController@updateCiudad');
Route::put('calles/{id}','App\Http\Controllers\calleController@updateCalle');

