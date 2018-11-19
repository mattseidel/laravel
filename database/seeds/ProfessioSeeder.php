<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('professions')->truncate();
        

        DB::table('professions')->insert([
            'tittle' => 'Desarrollador front-end'
        ]);

        DB::table('professions')->insert([
            'tittle' => 'Desarrollador back-end'
        ]);

        DB::table('professions')->insert([
            'tittle' => 'Dieseñador web'
        ]);
    }
}
