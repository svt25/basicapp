<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Task::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Page::factory(10)->create();
        \App\Models\Hobby::factory(10)->create();
    }
}
