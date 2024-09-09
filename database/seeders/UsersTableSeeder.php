<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // Add this line to import the User model

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
    }
}
