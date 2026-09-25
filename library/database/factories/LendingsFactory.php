<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\lendings;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<lendings>
 */
class LendingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'copy_id' => Copy::all()->random()->id,
            'start' => $this->faker->dateTimeBetween('-1 month', 'now')
        ];
    }
}
