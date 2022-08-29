<?php

namespace Database\Factories;

use App\Models\Hours;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HoursFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hours::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'boekjaar' => $this->faker->numerify('####'),
            'Week' => $this->faker->numerify('##'),
            'Date' => now(),
            'Persoon_Nummer' => $this->faker->numberBetween(0,9999999),
            'Uren' => $this->faker->numberBetween(0,24),
            'Uurcode' => $this->faker->asciify('****')
        ];
    }
}
