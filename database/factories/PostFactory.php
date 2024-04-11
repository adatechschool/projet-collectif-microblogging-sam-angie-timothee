<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, int, mixed>
     */
    public function definition(): array
    {
        $maxUserId = User::max('id');

        return [
            "title" => fake()->title(),
            "content" => fake()->paragraph(),
            'user_id' => fake()->numberBetween(1, $maxUserId),
            "published_at" => fake()->date(),
            "image" => fake()->imageUrl()
        ];
    }
}
