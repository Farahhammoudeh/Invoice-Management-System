<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'invoice_number'=>fake()->randomNumber(),
           'invoice_date'=>fake()->date(),
           'client_name'=>fake()->name(),
           'client_email'=>fake()->email(),
           'item_description' => fake()->text(),
           'item_amount' => fake()->randomFloat(2, 10, 1000), 
           'due_date' => fake()->date(),
           'payment_terms' => fake()->text(),
        ];
    }
}
