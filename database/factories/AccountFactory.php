<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'account_no' => random_int(3000000000, 3099999999),
            'account_type_id' => $this->faker->randomElement([1, 2, 3]),
            'account_balance' => random_int(0, 200000)
        ];
    }
}
