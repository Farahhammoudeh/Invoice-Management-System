<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\InvoiceDetailes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoices = Invoice::factory(5)->create();
    }
}