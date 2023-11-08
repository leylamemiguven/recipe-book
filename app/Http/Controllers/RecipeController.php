<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function showAddRecipeForm()
    {
        return view('add-recipe');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string',
            'ingredients' => 'required|string',
            'prepTime' => 'nullable|string',
            'cookingTime' => 'nullable|string',
            'servings' => 'nullable|string',
            'calories' => 'nullable|string',
            'directions' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        // Create a new recipe record in the database
        $recipe = Recipe::create([
            'title' => $request->input('title'),
            'ingredients' => $request->input('ingredients'),
            'prepTime' => $request->input('prepTime'),
            'cookingTime' => $request->input('cookingTime'),
            'servings' => $request->input('servings'),
            'calories' => $request->input('calories'),
            'directions' => $request->input('directions'),
            'notes' => $request->input('notes'),
        ]);

        // Optionally, you can return a response to the frontend
        return response()->json(['message' => 'Recipe saved successfully', 'recipe' => $recipe]);
    }
}