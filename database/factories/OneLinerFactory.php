<?php

namespace Database\Factories;

use App\Models\OneLiner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OneLinerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = OneLiner::class;

    public function definition()
    {
        return [
            'one_liner' => $this->faker->paragraph,
        ];
    }
}
