<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'model' => 'Logan',
            'color' => 'blue',
            'year' => '2017',
            'driver_id' => '1'
        ]);
        DB::table('cars')->insert([
            'model' => 'i10',
            'color' => 'red',
            'year' => '2010',
            'driver_id' => '1'
        ]);
        DB::table('cars')->insert([
            'model' => 'Bipper',
            'color' => 'white',
            'year' => '2008',
            'driver_id' => '1'
        ]);
    }
}
