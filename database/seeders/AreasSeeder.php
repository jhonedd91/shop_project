<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Areas;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Areas::factory()
        ->count(10)
        ->create();
    }
}
