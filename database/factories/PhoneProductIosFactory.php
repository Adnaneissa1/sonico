<?php

namespace Database\Factories;

use App\Models\PhoneProductIos;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneProductIosFactory extends Factory
{
    protected $model = PhoneProductIos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nameP' => $this->faker->word,
            'image' => $this->faker->imageUrl,
        ];
    }
}
