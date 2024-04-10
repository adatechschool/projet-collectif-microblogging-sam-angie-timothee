<?php

namespace Database\Factories;

use App\Models\Post;
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
        return [
            "title" => fake() ->title(),
            "content" => fake()->paragraph(),
            'user_id' => fake()->numberBetween(1, 1000000), 
            "published_at" => fake()->date(),
            "image" => fake()->imageUrl()
        ];
    }
}
