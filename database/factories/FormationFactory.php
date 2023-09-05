<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ['individuelle','masse'];
        return [
            'intitule'=>fake()->title(),
            'description'=>fake()->paragraph(),
            'cout'=>fake()->numberBetween(10000,1000000),
            'duree'=>fake()->numberBetween(1,300),
            'lieu'=>fake()->country(),
            'type'=>$type[fake()->numberBetween(0,1)]
        ];
    }
}
