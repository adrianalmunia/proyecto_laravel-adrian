<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Insertamos tus datos específicos primero
        Alumno::create([
            'nombre' => 'Adrián',
            'apellido' => 'Almunia',
            'email' => 'adrianalmunia@gmail.com',
            'edad' => 21
        ]);

        //Generamos 20 alumnos aleatorios extra usando el Factory
        Alumno::factory(20)->create();
    }
}
