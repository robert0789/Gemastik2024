<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            ['nama' => 'Museum Siwalima', 'kategori_id' => 1, 'kota_id' => 1, 'harga' => 'Rp 20.000 - Rp 50.000'],
            ['nama' => 'Desa Sawai', 'kategori_id' => 2, 'kota_id' => 1, 'harga' => 'Gratis'],
            ['nama' => 'Pulau Pombo', 'kategori_id' => 3, 'kota_id' => 1, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Pantai Nastepa', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Pantai Liang', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Pantai Pintu Kota', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Masjid Wapauwe', 'kategori_id' => 1, 'kota_id' => 1, 'harga' => 'Gratis'],
            ['nama' => 'Jembatan Merah Putih', 'kategori_id' => 5, 'kota_id' => 1, 'harga' => 'Gratis'],
            ['nama' => 'Tama Pattimura', 'kategori_id' => 6, 'kota_id' => 1, 'harga' => 'Gratis'],
            ['nama' => 'Pintu Kota Beach', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Natsepa Beach', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Benteng Victoria', 'kategori_id' => 1, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Alang Beach', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Gunung Api Banda', 'kategori_id' => 7, 'kota_id' => 2, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Benteng Belgica', 'kategori_id' => 1, 'kota_id' => 2, 'harga' => 'Rp 20.000 - Rp 50.000'],
            ['nama' => 'Benteng Ferangi', 'kategori_id' => 1, 'kota_id' => 2, 'harga' => 'Rp 20.000 - Rp 50.000'],
            ['nama' => 'Pulau Hatta', 'kategori_id' => 3, 'kota_id' => 2, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Lava Flow Banda Neira', 'kategori_id' => 7, 'kota_id' => 2, 'harga' => 'Rp 20.000 - Rp 50.000'],
            ['nama' => 'Pulau Rhun', 'kategori_id' => 3, 'kota_id' => 2, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Pulau Nailaka', 'kategori_id' => 3, 'kota_id' => 2, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Pulau Syahrir', 'kategori_id' => 3, 'kota_id' => 2, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Rumah Pengasingan Bung Hatta', 'kategori_id' => 1, 'kota_id' => 2, 'harga' => 'Gratis'],
            ['nama' => 'Pantai Ora', 'kategori_id' => 4, 'kota_id' => 3, 'harga' => 'Rp 20.000 - Rp 50.000'],
            ['nama' => 'Pulau Molana', 'kategori_id' => 3, 'kota_id' => 3, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Danau Rana', 'kategori_id' => 7, 'kota_id' => 4, 'harga' => 'Gratis'],
            ['nama' => 'Goa Hawang', 'kategori_id' => 7, 'kota_id' => 4, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Air Terjun Lumoli', 'kategori_id' => 8, 'kota_id' => 4, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Taman Nasional Manusela', 'kategori_id' => 9, 'kota_id' => 4, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Teluk Sawai', 'kategori_id' => 10, 'kota_id' => 4, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Kepulauan Kei', 'kategori_id' => 11, 'kota_id' => 5, 'harga' => 'Gratis'],
            ['nama' => 'Pantai Ngurtafur', 'kategori_id' => 4, 'kota_id' => 5, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Pasir Panjang', 'kategori_id' => 4, 'kota_id' => 5, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Pulau Bair', 'kategori_id' => 3, 'kota_id' => 6, 'harga' => 'Gratis'],
            ['nama' => 'Pulau Tiga', 'kategori_id' => 3, 'kota_id' => 6, 'harga' => '4500000'],
            ['nama' => 'Taman Laut Banda', 'kategori_id' => 9, 'kota_id' => 2, 'harga' => 'Rp 20.000 - Rp 50.000'],
            ['nama' => 'Pulau Ay', 'kategori_id' => 3, 'kota_id' => 2, 'harga' => 'Rp 50.000 - Rp 100.000'],
            ['nama' => 'Pulau Asutta', 'kategori_id' => 3, 'kota_id' => 3, 'harga' => 'Gratis'],
            ['nama' => 'Pantai Jikomalamo', 'kategori_id' => 4, 'kota_id' => 1, 'harga' => 'Rp 10.000 - Rp 20.000'],
            ['nama' => 'Air Terjun Hoko', 'kategori_id' => 8, 'kota_id' => 4, 'harga' => 'Rp 10.000 - Rp 20.000'],
        ];

        DB::table('destinations')->insert($destinations);
    }
}
