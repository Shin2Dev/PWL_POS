<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_stok = [
            [1, 1, '2024-03-26', 5],
            [2, 1, '2024-03-26', 5],
            [3, 3, '2024-03-26', 10],
            [4, 3, '2024-03-26', 10],
            [5, 3, '2024-03-26', 10],
            [6, 3, '2024-03-26', 10],
            [7, 3, '2024-03-26', 20],
            [8, 3, '2024-03-26', 20],
            [9, 3, '2024-03-26', 20],
            [10, 3, '2024-03-26', 20],
        ];
        
        foreach ($data_stok as $index => $stok) {
            $data[] = [
                'stok_id' => $index + 1,
                'barang_id' => $stok[0],
                'user_id' => $stok[1],
                'stok_tanggal' => $stok[2],
                'stok_jumlah' => $stok[3],
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
