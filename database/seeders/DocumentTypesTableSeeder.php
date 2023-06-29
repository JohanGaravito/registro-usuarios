<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $documentTypes = [
            ['descripcion' => 'Tarjeta de Identidad'],
            ['descripcion' => 'Cédula de Ciudadanía'],
            ['descripcion' => 'Cédula Extranjera'],
        ];
            // Agrega más tipos de documento si es necesario
        

        DB::table('document_types')->insert($documentTypes);
    }
}
