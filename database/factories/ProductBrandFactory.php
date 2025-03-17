<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductBrand>
 */
class ProductBrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>  $this->faker->randomElement(['Nike', 'Adidas', 'Puma', 'Reebok', 'Under Armour']),
            'slug' =>  $this->faker->slug(),
            'status' =>  $this->faker->randomElement(['active', 'inactive']),
            'created_by' => 1,    
            'updated_by' => 1,
        ];
    }
}
