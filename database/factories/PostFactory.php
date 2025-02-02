<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, 
            'content' => $this->faker->text, 
            'imgID' => $this->faker->numberBetween(1, 3), 
            'categoryID' => $this->faker->numberBetween(1,5),
            'author' => $this->faker->name, 
        ];
    }
}
