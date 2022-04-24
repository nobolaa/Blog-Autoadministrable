<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, null, false),
        ];
    }

    public function url($where = 'users/'){
        return $this->state(function ($attributes) use ($where){
            return [
                'url' => $where . $this->faker->image('public/storage/' . $where, 640, 480, null, false)
            ];
        });
    }
}
