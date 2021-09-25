<?php

namespace Database\Factories;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(1, 01, 99),
            'cost' => $this->faker->randomFloat(1, 01, 99),
            'quantity' => $this->faker->randomNumber(2, true),
            'brand_id' => Brands::inRandomOrder()->first()->id,
            'category_id' => Categories::inRandomOrder()->first()->id,
        ];
    }
}
