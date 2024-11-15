<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'     => fake()->name(),
            'grade_id' => fake()->numberBetween(1, 4),
            'email'    => fake()->unique()->safeEmail(),
            'telepon'  => fake()->phoneNumber(),
            'address'  => fake()->address()
        ];
    }
}
