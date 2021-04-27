<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

//Comando para crear un factory
//php artisan make:factory CursoFactory --model=Curso

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_curso' => $this->faker->sentence(),
            'autor' => $this->faker->sentence(),
            'calificacion' => $this->faker->randomFloat(2, 0, 5),
            'categoria' => $this->faker->randomElement()
        ];
    }
}
