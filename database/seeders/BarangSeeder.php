<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_barang')->insert(array(
            array(
                'foto' => '',
                'nama' => 'barang Pertama',
                'description' => 'lorem ipsum dolor sit amet',
                'harga' => 1000,
                'rating' => 5,
                'stok' => 10,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
            array(
                'foto' => '',
                'nama' => 'barang Kedua',
                'description' => 'lorem ipsum dolor sit amet',
                'harga' => 1000,
                'rating' => 5,
                'stok' => 10,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ),
        )
        );
    }
}
