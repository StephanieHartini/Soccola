<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $productNames = ['Laneige', 'Rose All Day', 'Espoir', 'ESQA', 'Studio Tropik', 'Wardah', 'LOREAL', 'Nivea', 'Vaseline', 'Garnier', 'Skin1004', 'COSRX', 'Some By Mi', 'Skintific', 'Somethinc', 'Azarine', 'Illiyoon'];

        $productCount = min(count($productNames), 17);

        for ($i = 0; $i < $productCount; $i++) {
            $randomKey = array_rand($productNames);
            $randomName = $productNames[$randomKey];

            DB::table('products')->insert([
                'name' => $randomName,
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat(2, 5, 100),
                'category_id' => $faker->randomElement(['makeup', 'skincare']),
            ]);

            unset($productNames[$randomKey]);
            $productNames = array_values($productNames);
        }
    }
}
