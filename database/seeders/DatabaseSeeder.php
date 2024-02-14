<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Product::factory(2)
             ->sequence(
                 [
                     'name' => 'Offre basique',
                     'stripe_product_id' => 'price_1Ojl6KIyelZG2oR5COPzlGjo',
                     'price' => 9.99,
                 ],
                 [
                     'name' => 'Offre premium',
                     'stripe_product_id' => 'price_1Ojl5LIyelZG2oR5DNl6WrSF',
                     'price' => 19.99,
                 ]
             )
             ->create();
    }
}
