<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_jual = [
            [1, 1, 500000, 2],
            [1, 1, 500000, 2],
            [1, 1, 500000, 1],

            [2, 2, 400000, 2],
            [2, 2, 400000, 2],
            [2, 2, 400000, 1],

            [3, 3, 10000, 5],
            [3, 3, 10000, 2],
            [3, 3, 10000, 3],

            [4, 4, 10500, 3],
            [4, 4, 10500, 2],
            [4, 4, 10500, 5],

            [5, 5, 30000, 2],
            [5, 5, 30000, 3],
            [5, 5, 30000, 5],

            [6, 6, 35000, 5],
            [6, 6, 35000, 3],
            [6, 6, 35000, 2],

            [7, 7, 50000, 4],
            [7, 7, 50000, 4],
            [7, 7, 50000, 2],

            [8, 8, 60000, 2],
            [8, 8, 60000, 4],
            [8, 8, 60000, 4],

            [9, 9, 5000, 10],
            [9, 9, 5000, 5],
            [9, 9, 5000, 5],

            [10, 10, 4500, 5],
            [10, 10, 4500, 5],
            [10, 10, 4500, 10],
            
        ];
        
        foreach ($data_jual as $index => $jual) {
            $data[] = [
                'detail_id' => $index + 1,
                'penjualan_id' => $jual[0],
                'barang_id' => $jual[1],
                'harga' => $jual[2],
                'jumlah' => $jual[3],
            ];
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
