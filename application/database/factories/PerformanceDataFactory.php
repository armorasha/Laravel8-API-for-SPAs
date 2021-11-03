<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerformanceDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'application_load' => $this->faker->randomFloat(2, 30, 80), //30.xx to 80.xx
            'response_time' => $this->faker->unique()->numberBetween(55, 199), //millisec
            'transaction_rate' => $this->faker->randomFloat(1, 88, 97), //88.x to 97.x
            'received_at' => $this->faker->dateTimeBetween('-1 week', '-1 day'),
            'sender_ip' => $this->faker->localIpv4(),
            // 'created_at' => now() // this will be added by laravel
        ];
    }
}
