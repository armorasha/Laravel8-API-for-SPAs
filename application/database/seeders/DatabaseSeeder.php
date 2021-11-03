<?php

namespace Database\Seeders;

use App\Models\PerformanceData;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PerformanceData::truncate(); // this is for deleting previous records in db
        // \App\Models\User::factory(10)->create();
        PerformanceData::factory(100)->create();
    }
}
