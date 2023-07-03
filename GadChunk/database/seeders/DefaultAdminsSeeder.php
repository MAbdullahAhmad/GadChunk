<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Hash;

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
            'userType' => 0,
            'name'     => 'Abdullah Ahmad',
            'email'    => 'theneweratech@gmail.com',
            'phone'    => '+923417072580',
            'password' => Hash::make('a new password'),

            'street'   => 'H#123, Street #1',
            'city'     => 'Lahore',
            'province' => 'Punjab',
            'zip_code' => '54000',
            'country'  => 'Pakistan',
        ]);

        User::factory()->create([
            'userType' => 0,
            'name'     => 'John Doe',
            'email'    => 'johndoe@example.com',
            'phone'    => '+923417072580',
            'password' => Hash::make('john doe password'),
            'street'   => 'H#123, Street #1',
            'city'     => 'Lahore',
            'province' => 'Punjab',
            'zip_code' => '54000',
            'country'  => 'Pakistan',
        ]);
    }
}
