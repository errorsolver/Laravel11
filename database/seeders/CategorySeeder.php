<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(3)->create(
            // [
            //     'color' => function () {
            //         $faker = \Faker\Factory::create('en_US');
            //         return $faker->word;
            //     },
            // ]
        );
    }
}
