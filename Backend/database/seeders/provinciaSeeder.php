<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class provinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $provincias = [
            ['Concepción','1'],
            ['Itata',2],
        ];
        $provincias = array_map(function($provincia) use ($now){
            return [
                'nombre_provincia' => $provincia[0],
                'id_region' => $provincia[1],
                'created_at' => $now,
                'updated_at' => $now
            ];
        },$provincias);
        \DB::table('provincias')->insert($provincias);
    }
}
