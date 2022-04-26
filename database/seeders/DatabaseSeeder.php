<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Tag;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        Storage::deleteDirectory('users');
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('users');
        Storage::makeDirectory('posts');
        */

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(8)->create();
        //$this->call(PostSeeder::class);
    }
}
