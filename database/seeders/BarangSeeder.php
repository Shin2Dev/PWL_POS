<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_barang = [
            ['Laptop', 1, 500000, 1500000], 
            ['Smartphone', 1, 400000, 1200000],
            ['Sapu', 2, 10000, 20000],
            ['Pel', 2, 10500, 22000],
            ['Wajan', 3, 30000, 40000],
            ['Panci', 3, 35000, 45000],
            ['Kaos', 4, 50000, 120000],
            ['Celana Panjang', 4, 60000, 130000],
            ['Pensil', 5, 5000, 10000],
            ['Penghapus', 5, 4500, 9000],
        ];
        
        foreach ($data_barang as $index => $barang) {
            $data[] = [
                'barang_id' => $index + 1,
                'kategori_id' => $barang[1],
                'barang_kode' => 'BRG' . str_pad($index + 1, 3, '0', STR_PAD_LEFT),
                'barang_nama' => $barang[0],
                'harga_beli' => $barang[2],
                'harga_jual' => $barang[3],
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
