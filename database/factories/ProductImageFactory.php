<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'path' =>  $this->faker->imageUrl(),
            'extension' =>  $this->faker->randomElement(['jpg', 'png', 'jpeg']),
            'size' =>  $this->faker->randomFloat(2, 1, 100),
            'type' =>  $this->faker->randomElement(['image', 'video']),
            'status' =>  $this->faker->randomElement(['active', 'inactive']),
            'is_main' =>  $this->faker->randomElement([1, 0]),
            'position' =>  $this->faker->numberBetween(1, 4),
            'product_id' =>  $this->faker->numberBetween(1, 10),
            'created_by' => 1,    
            'updated_by' => 1,
        ];
    }
}
