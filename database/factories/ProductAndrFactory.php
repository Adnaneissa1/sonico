<?php

namespace Database\Factories;

use App\Models\CategoryPhoneAndr;
use App\Models\ProductAndr;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAndrFactory extends Factory
{
    protected $model = ProductAndr::class;

    public function definition()
    {
        return [
            'nameP' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'category_phone_andr_id' => CategoryPhoneAndr::factory(),
            // Add more fields as needed
        ];
    }
}
