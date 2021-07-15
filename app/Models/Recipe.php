<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(Recipe::class, 'category__recipes',  'recipe_id','category_id');
    }
}
