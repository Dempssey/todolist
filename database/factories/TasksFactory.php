<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *

     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'task_id'=>$this->faker->numberBetween(1,4),
            'name'=>$this->faker->unique()->word(),
            'tool'=>$this->faker->unique()->word()
        ];
    }
}
