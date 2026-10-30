<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Mariane Belhau',
            'email' => 'mar.belhau@gmail.com',
            'password' => '123456'
        ]);
    }
}