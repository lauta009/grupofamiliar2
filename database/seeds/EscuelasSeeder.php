<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class EscuelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escuelas')->insert([
            'nombre' => 'Escuela N° 266',
        ]);
        DB::table('escuelas')->insert([
            'nombre' => 'Escuela Inicial N° 33',
        ]);
        DB::table('escuelas')->insert([
            'nombre' => 'Colegio Secundario i',
        ]);
    }
}
