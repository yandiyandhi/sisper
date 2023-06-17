<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Yandi',
            'username' => 'YandiYandhi',
            'level' => 'superadmin',
            'password' => bcrypt('12345'),
            'email' => 'yandyandhi@gmail.com',
        ]);


        User::create([
            'name' => 'agus',
            'username' => 'agus00',
            'level' => 'admin',
            'password' => bcrypt('12345'),
            'email' => 'agus@gmail.com',
        ]);
        User::create([
            'name' => 'jhon',
            'username' => 'jhon',
            'level' => 'admin',
            'password' => bcrypt('12345'),
            'email' => 'jhon@gmail.com',
        ]);
        User::create([
            'name' => 'smith',
            'username' => 'smith',
            'level' => 'admin',
            'password' => bcrypt('12345'),
            'email' => 'smith@gmail.com',
        ]);
    }
}
