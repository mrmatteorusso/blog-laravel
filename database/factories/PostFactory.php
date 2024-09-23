<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->text(10),
            'content' => fake()->paragraph(5),
            'author' => fake()->name(),
            'comment' => fake()->paragraph(3),
            'tag' => fake()->randomElement(['developer', 'manager', 'engineer', 'designer']),
        ];
    }
}
