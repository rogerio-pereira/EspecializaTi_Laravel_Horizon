<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        foreach(range(1,6) as $id) {
            User::factory()->create([
                'name' => "Test User {$id}",
                'email' => "user{$id}@example.com",
                'image' => storage_path("user${id}.png"),
            ]);
        }
    }
}
