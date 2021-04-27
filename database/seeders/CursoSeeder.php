<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->nombre_curso = 'Laravel';
        $curso->autor = 'Alejandro';
        $curso->calificacion= '4.8';
        $curso->categoria = 'Web development';

        $curso->save();

        $curso2 = new Curso();
        $curso2->nombre_curso = 'Laravel';
        $curso2->autor = 'Alejandro';
        $curso2->calificacion= '4.8';
        $curso2->categoria = 'Web development';

        $curso2->save();

        $curso3 = new Curso();
        $curso3->nombre_curso = 'Laravel';
        $curso3->autor = 'Alejandro';
        $curso3->calificacion= '4.8';
        $curso3->categoria = 'Web development';

        $curso3->save();
    }
}
