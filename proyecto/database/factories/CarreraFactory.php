<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarreraFactory extends Factory
{
    protected $model = Carrera::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name' => $this -> faker->sentence(),
            'facultad' => $this -> faker->randomElement(['Minas', 'Ciencias', 'Artes']),
            'description' => $this -> faker->paragraph()
        ];
    }
}
