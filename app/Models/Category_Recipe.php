<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Recipe extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function recipe(){
        return $this->belongsTo('App\Recipe','recipe_id');
    }
}
