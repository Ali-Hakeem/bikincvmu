<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'name' => 'Arnold',
            'email' => 'email@bikincvmu.com',
            'password' => \bcrypt('penuh123123')
        ];

        User::insert($users);
    }
}
