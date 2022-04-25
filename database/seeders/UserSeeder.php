<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nabil Ali Asserhaou',
            'email' => 'nabilaliasserhaou@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        User::factory(3)->create();
    }
}
