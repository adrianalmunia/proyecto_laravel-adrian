<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
    \App\Models\Alumno::create([
        'nombre' => 'Adrián',
        'apellido' => 'Almunia',
        'email' => 'adrianalmunia@gmail.com',
        'edad' => 21
    ]);
    \App\Models\Alumno::create([
        'nombre' => 'Diego',
        'apellido' => 'Almunia',
        'email' => 'diegomunia@gmail.com',
        'edad' => 17
    ]);
    \App\Models\Alumno::create([
        'nombre' => 'Ernesto',
        'apellido' => 'Almunia',
        'email' => 'ernestoalmunia@gmail.com',
        'edad' => 43
    ]);

}
}
