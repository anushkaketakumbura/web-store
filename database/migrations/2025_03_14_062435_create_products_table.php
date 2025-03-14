<?php

use App\Models\User;
use App\Models\Brand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title,200');
            $table->string('slug,400');
            $table->integer('quantity');
            $table->longText('description')->nullable();
            $table->boolean('publishes')->default(0);
            $table->bolean('instock')->default(0);
            $table->decimal('price', 10, 2);
            $table->foreignId('User::class', 'created_by')->nullable();
            $table->foreignId('User::class', 'updated_by')->nullable();
            $table->foreignId('Brand::class', 'brand_by')->nullable();
            $table->foreignId('Category::class', 'category_id')->nullable();
            $table->softDeletes();
            $table->foreignId('User::class', 'deleted_by')->nullable();
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
