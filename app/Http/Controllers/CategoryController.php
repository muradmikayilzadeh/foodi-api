<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeCollection;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
//        $recipes =
        return new RecipeCollection(Recipe::all());
    }
}
