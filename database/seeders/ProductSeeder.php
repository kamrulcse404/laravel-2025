<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();


        for ($i=0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->realText(),
                'seller_name' => $faker->name(),
                'description' => $faker->realText(),
                'price' => (float) random_int(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
