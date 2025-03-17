<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductRating>
 */
class ProductRatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'review' =>  $this->faker->realText(),
            'status' =>  $this->faker->randomElement(['active', 'inactive']),
            'product_id' => $this->faker->numberBetween(1, 10),
            'user_id' =>  $this->faker->numberBetween(1, 10),
            'created_by' => 1
        ];
    }
}
