<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MembersList;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MembersList>
 */
class MembersListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'profession'=>fake()->jobTitle()
        ];
    }
}
