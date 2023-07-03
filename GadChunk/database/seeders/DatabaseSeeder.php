<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
//    Seeding the application data
    public function run()
    {
         $this->call([
            // OrderSeeder::class,
            // OrderDetailSeeder::class,
            // BrandSeeder::class,
            // CategorySeeder::class,
            // ProductSeeder::class,
            // ProductInventorySeeder::class,
            // InventoryImagesSeeder::class,
            // ReviewsSeeder::class,
            // CollectionSeeder::class,
            DefaultAdminsSeeder::class
         ]);


    }

}