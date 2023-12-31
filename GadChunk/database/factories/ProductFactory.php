<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'category_id' => $this->faker->numberBetween(1,5),
            'description' => $this->faker->paragraph,
            'orignalPrice'=> $this->faker->numberBetween(1000,2000),
            'brand' => $this->faker->company,
            'discountPrice'=> $this->faker->numberBetween(800,900),
            'stock' => $this->faker->numberBetween(0,500),


        ];
    }
}
