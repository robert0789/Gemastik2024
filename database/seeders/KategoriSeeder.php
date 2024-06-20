<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['nama' => 'Situs Sejarah'],
            ['nama' => 'Desa dan Kota'],
            ['nama' => 'Pulau'],
            ['nama' => 'Pantai'],
            ['nama' => 'Jembatan'],
            ['nama' => 'Lain-lain'],
            ['nama' => 'Keajaiban Alam'],
            ['nama' => 'Air Terjun'],
            ['nama' => 'Taman Nasional'],
            ['nama' => 'Teluk'],
            ['nama' => 'Kepulauan'],
        ];

        DB::table('kategoris')->insert($categories);
    }
}
