<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class calleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $calles = [
            ['calle1',1],
            ['calle2',2],
            ['calle3',3],
            ['calle4',4],
            ['calle5',5]
        ];
        $calles = array_map(function($calle) use ($now){
            return [
                'nombre_calle' => $calle[0],
                'id_ciudad' => $calle[1],
                'created_at' => $now,
                'updated_at' => $now
            ];
        },$calles);
        \DB::table('calles')->insert($calles);
    }
}
