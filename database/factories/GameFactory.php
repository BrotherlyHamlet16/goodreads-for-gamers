<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'cover_url' => $this->faker->imageUrl(300, 400, 'games',),
            'release_date' => $this->faker->date(),
            'developer' => $this->faker->company,
            'publisher' => $this->faker->company,
            'summary' => $this->faker->paragraph,
            'igdb_id' => $this->faker->unique()->numberBetween(1000, 99999)
        ];
    }
}
