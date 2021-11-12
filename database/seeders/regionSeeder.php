<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class regionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $regions =[
            ['Biobío'],
            ['Ñuble'],
            ['Valparaiso']
        ];
        $regions = array_map(function($region) use ($now){
            return [
                'Nombre_region' => $region[0],
                'created_at' => $now,
                'updated_at' => $now
            ];
    },$regions);
        \DB::table('regions')->insert($regions);
    }
}
