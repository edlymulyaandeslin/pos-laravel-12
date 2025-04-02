<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'description' => 'This is the first post'
        ]);
        Post::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'description' => 'This is the second post'
        ]);
    }
}