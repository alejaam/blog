<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //PARA EJECUTAR EL SEED JUNTO CON EL FRESH DE  LA TABLA SE USA:
        //php artisan migrate:fresh --seed
        // $this->call(CursoSeeder::class);
        User::factory(10)->create();
        Curso::factory(50)->create();
    }
}
