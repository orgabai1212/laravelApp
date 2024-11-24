<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@medisonmedia.com',
            'password' => Hash::make('Aa123456'), // Hash the password
        ]);
    }
}
