<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->text,
            'post_id'=>\App\Models\Post::factory()->create()->id,
            'user_id'=>\App\Models\User::factory()->create()->id,
        ];
    }
}
