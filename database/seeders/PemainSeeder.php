<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Pemain::create([
                'id' => fake()->id(),
                'nama_pemain' => fake() ->name(),
                'no_punggung' => fake() ->number(),
                'posisi' => fake() ->position(),
            ]);
        }
    }
}
