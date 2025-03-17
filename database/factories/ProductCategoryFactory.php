<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->randomElement(['Technology', 'Clothing', 'Home', 'Health', 'Beauty']),
            'slug' =>  $this->faker->slug(),
            'status' =>  $this->faker->randomElement(['active', 'inactive']),
            'created_by' => 1,
            'updated_by' => 1
        ];
    }
}
