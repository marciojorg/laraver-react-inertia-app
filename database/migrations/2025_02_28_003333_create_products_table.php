<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->string('status');
            $table->longText('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->string('slug');
            $table->string('due_date')->nullable();
            $table->string('priority');
            $table->foreignId('category_id')->constrained('product_categories');
            $table->foreignId('brand_id')->constrained('product_brands');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users')->nullable();
            $table->foreignId('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
