<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brands;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brands::factory()
        ->count(10)
        ->create();
    }
}
