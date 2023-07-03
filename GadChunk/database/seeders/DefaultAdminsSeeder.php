<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DefaultAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'User Khan',
            'email' => 'user@mail.com',
            'phone' => '03041232233',
            'street' => 'abc street number',
            'city' => 'Bahawalpur',
            'province' => 'Punjab',
            'zip_code' => '61300',
            'country' => 'Pakistan',
            'userType' => 1
         ]);
         
         User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'admin1@mail.com',
            'phone' => '03041232233',
            'street' => 'abc street number',
            'city' => 'Bahawalpur',
            'province' => 'Punjab',
            'zip_code' => '61300',
            'country' => 'Pakistan',
            'userType' => 0
        ]);
    }
}
