<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 categories, each with 5 products
        \App\Models\CategoryPhoneAndr::factory(10)->create()->each(function ($category) {
       \App\Models\ProductAndr::factory(5)->create(['category_phone_andr_id' => $category->id]);
        });

        \App\Models\PhoneProductIos::factory(20)->create();
    }
}
