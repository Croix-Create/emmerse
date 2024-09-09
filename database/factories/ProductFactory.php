<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique(),
            'name' => fake()->unique(),
            'description' => fake()->unique()->int(),
            'price' => fake()->unique()->string(),
            'image_url' => "https://wallpapercave.com/wp/wp2032147.jpg",
        ];
    }
}
