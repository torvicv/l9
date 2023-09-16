<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();

        \App\Models\Post::factory(10)->create();

        /*\App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => bcrypt('password')
        ]);*/
    }
}
