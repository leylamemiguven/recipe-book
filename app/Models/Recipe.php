<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // Add any other attributes you want to be mass assignable here
        'ingredients',
        'prepTime',
        'cookingTime',
        'servings',
        'calories',
        'directions',
        'notes',
    ];
}
