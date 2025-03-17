<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Marcio',
            'email' => 'marcio@teste.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => time()
        ]);

        ProductBrand::factory()->count(5)->create();
        ProductCategory::factory()->count(5)->create();
        Product::factory()->count(10)->create();
        ProductImage::factory()->count(5)->create();
    }
}
