<?php

namespace Database\Factories;

use App\Models\CategoryPhoneAndr;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryPhoneAndrFactory extends Factory
{
    protected $model = CategoryPhoneAndr::class;

    public function definition()
    {
        return [
            'nameCatg' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
