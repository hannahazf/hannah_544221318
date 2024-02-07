<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 5000],
            ['nama_produk' => 'Shampoo Sunsilk', 'harga_jual' => 4000, 'harga_beli' => 8000]
        ]);
    }
}
