<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ciudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now =now();
        $ciudades =[
            ['Concepción', 1],
            ['Talcahuano', 1],
            ['Chiguayante',1],
            ['Quirihue',2],
            ['Cobquecura',2]
        ];
        $ciudades = array_map(function($ciudad) use ($now){
            return [
                'nombre_ciudad' => $ciudad[0],
                'id_provincia' => $ciudad[1],
                'created_at' => $now,
                'updated_at' => $now
            ];
        }, $ciudades);
        \DB::table('ciudades')->insert($ciudades);
    }
}
