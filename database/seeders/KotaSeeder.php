<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['nama' => 'Ambon'],
            ['nama' => 'Banda Islands'],
            ['nama' => 'Central Maluku'],
            ['nama' => 'Seram Island'],
            ['nama' => 'Kei Islands'],
            ['nama' => 'Other Regions'],
        ];

        DB::table('kotas')->insert($cities);
    }
}
