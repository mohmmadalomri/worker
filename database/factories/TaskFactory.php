<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'company_id' => $this->faker->randomNumber(1, 50),
            'customer_id' => $this->faker->randomNumber(1, 50),
            'group_id' => $this->faker->randomNumber(1, 50),
            'project_id' => $this->faker->randomNumber(1, 50),
            'image' => $this->faker->image(null, 500, 500),

        ];
    }
}
