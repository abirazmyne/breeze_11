<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);
        $agent = User::create([
            'name' => 'Agent User',
            'email' => 'agent@agent.com',
            'password' => Hash::make('12345678'),
            'role' => 'agent'
        ]);
        $agent = User::create([
            'name' => ' User',
            'email' => 'user@user.com',
            'password' => Hash::make('12345678'),
            'role' => 'user'
        ]);


    }
}
