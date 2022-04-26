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
        ])->assignRole('Admin');

        User::create([
            'name' => 'Blogger Prueba',
            'email' => 'bloggerprueba@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Blogger');

        User::factory(1)->create();
    }
}
