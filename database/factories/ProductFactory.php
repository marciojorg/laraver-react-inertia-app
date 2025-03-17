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
        return  [
            'name' =>  $this->faker->words(3, true), // ou $this->faker->word()
            'status' =>  $this->faker->randomElement(['active', 'inactive']),
            'description' =>  $this->faker->realText(),
            'price' =>  $this->faker->randomFloat(2, 1, 100),
            'stock' =>  $this->faker->numberBetween(1, 20),
            'slug' =>  $this->faker->slug(),
            'due_date' =>  $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i'),
            'priority' =>  $this->faker->randomElement(['low', 'medium', 'high']),
            'category_id' =>  $this->faker->numberBetween(1, 5),
            'brand_id' =>  $this->faker->numberBetween(1, 5),
            'created_by' => 1,    
            'updated_by' => 1,
        ];  
    }
}
