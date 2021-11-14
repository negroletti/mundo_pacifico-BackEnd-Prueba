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

// Métodos regiones

Route::get('regiones','App\Http\Controllers\regionController@getRegiones');
Route::get('regiones/{id}', 'App\Http\Controllers\regionController@getRegion');
//Route::post('regiones/add','App\Http\Controllers\regionController@addRegion');
//Route::put('regiones/mod/{id}','App\Http\Controllers\regionController@updateRegion');

// Métodos provincias

Route::get('provincias','App\Http\Controllers\provinciaController@getProvincias');
Route::get('provincias/{id}', 'App\Http\Controllers\provinciaController@getProvincia');
Route::get('provincias/region/{id}','App\Http\Controllers\provinciaController@getProvinciasRegion');
//Route::post('provincias/add','App\Http\Controllers\provinciaController@addProvincia');
//Route::put('provincias/mod/{id}','App\Http\Controllers\provinciaController@updateProvincia');

// Métodos ciudades

Route::get('ciudades','App\Http\Controllers\ciudadController@getCiudades');
Route::get('ciudades/{id}', 'App\Http\Controllers\ciudadController@getCiudad');
Route::get('ciudades/provincia/{id}','App\Http\Controllers\ciudadController@getCiudadesProvincia');
//Route::post('ciudades/add','App\Http\Controllers\ciudadController@addCiudad');
//Route::put('ciudades/mod/{id}','App\Http\Controllers\ciudadController@updateCiudad');

// Métodos calles

Route::get('calles','App\Http\Controllers\calleController@getCalles');
Route::get('calles/{id}', 'App\Http\Controllers\calleController@getCalle');
Route::get('calles/id/{id}', 'App\Http\Controllers\calleController@getCallesNombre');
Route::post('calles/','App\Http\Controllers\calleController@addCalle');
Route::put('calles/{id}','App\Http\Controllers\calleController@updateCalle');
Route::delete('calles/{id}','App\Http\Controllers\calleController@deleteCalle');

