<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeCollection;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(){
        return new RecipeCollection(Recipe::all());
    }

    public function show($id){
        return new RecipeResource(Recipe::find($id));
    }
}
