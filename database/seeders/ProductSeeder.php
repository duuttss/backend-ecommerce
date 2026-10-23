<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Tambahan 1
use Illuminate\Support\Str;        // <-- Tambahan 2

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Gaming ROG', 
                'slug' => Str::slug('Laptop Gaming ROG'), 
                'description' => 'Laptop gaming high performance dengan RTX 4060', 
                'category_id' => 1, 
                'price' => 25000000, 
                'img' => 'products/laptop.jpg', 
                'stock' => 10, 
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'name' => 'Kaos Polos Premium', 
                'slug' => Str::slug('Kaos Polos Premium'), 
                'description' => 'Kaos polos premium bahan cotton combed 30s', 
                'category_id' => 2, 
                'price' => 75000, 
                'img' => 'products/kaos.jpg', 
                'stock' => 25, 
                'created_at' => now(), 
                'updated_at' => now(),
            ]
        ]);
    }
}