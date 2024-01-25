<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(array(
            ['nama_produk'=>'Sabun Lifebuoy','harga_jual'=>'6000'],
            ['nama_produk'=>'Popcorn','harga_jual'=>'21000'],
            ['nama_produk'=>'Coca Cola','harga_jual'=>'5000'],
            ['nama_produk'=>'Shampoo Kuning','harga_jual'=>'21000']
        ));
    }
}
