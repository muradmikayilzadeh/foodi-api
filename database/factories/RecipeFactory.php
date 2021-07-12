<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description'=>$this->faker->text(200),
            'photo'=> "storage/app/public/images/pilaff.jpg",
            'duration'=>$this->faker->numberBetween(1,4),
            'calories'=>$this->faker->numberBetween(40,1500),
            'rating' => $this->faker->numberBetween(1,5)
        ];
    }
}
