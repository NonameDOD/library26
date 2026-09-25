<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::all()->random()->id,
            'hardcovered' => $this->faker->boolean,
            'publication' => $this->faker->date,
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
