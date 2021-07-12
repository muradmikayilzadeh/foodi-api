<?php

namespace Database\Factories;

use App\Models\Category_Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class Category_RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category_Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_id" => $this->faker->numberBetween(0,10),
            "recipe_id" => $this->faker->numberBetween(101,150)
        ];
    }
}
