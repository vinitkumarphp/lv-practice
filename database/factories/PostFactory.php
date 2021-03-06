<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->name;
        return [
            'name'=>$name,
            'description'=>$this->faker->text,
            'user_id'=>\App\Models\User::factory()->create()->id,
            'slug'=>Str::slug($name,'-')
        ];
    }
}
