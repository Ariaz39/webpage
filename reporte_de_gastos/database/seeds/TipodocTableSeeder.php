<?php

use Illuminate\Database\Seeder;

class TipodocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipodoc')->insert([
            ['nombre'=>'Cédula'],
            ['nombre'=>'NIT'],
            ['nombre'=>'RUT'],
            ['nombre'=>'Pasaporte'],
            ['nombre'=>'Tarjeta de identidad'],
            ['nombre'=>'Registro civil']
        ]);
    }
}
