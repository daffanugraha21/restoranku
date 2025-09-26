<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2),
            'price' => $this->faker->randomFloat(2, 10000, 100000),
            'description' => $this->faker->text(),
            'image' => fake()->randomElement([
                'https://images.unsplash.com/photo-1526318896980-cf78c088247c',
                'https://images.unsplash.com/photo-1553621042-f6e147245754',
                'https://images.unsplash.com/photo-1593357849627-cbbc9fda6b05'
            ]),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
