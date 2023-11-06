<?php

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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_title');
            $table->text('recipe_ingredients');
            $table->integer('recipe_prep_time');
            $table->integer('recipe_cook_time');
            $table->integer('recipe_servings');
            $table->integer('recipe_calories');
            $table->text('recipe_directions');
            $table->text('recipe_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
