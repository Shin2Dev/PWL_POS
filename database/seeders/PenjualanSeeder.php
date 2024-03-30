<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_jual = [
            [1, 'Admin A', '2024-03-26'],
            [1, 'Admin B', '2024-03-26'],
            [3, 'Staff A', '2024-03-26'],
            [3, 'Staff B', '2024-03-26'],
            [3, 'Staff C', '2024-03-26'],
            [3, 'Staff D', '2024-03-26'],
            [3, 'Staff E', '2024-03-26'],
            [3, 'Staff F', '2024-03-26'],
            [3, 'Staff G', '2024-03-26'],
            [3, 'Staff H', '2024-03-26'],
        ];
        
        foreach ($data_jual as $index => $jual) {
            $data[] = [
                'penjualan_id' => $index + 1,
                'user_id' => $jual[0],
                'pembeli' => $jual[1],
                'penjualan_kode' => 'PNJ' . str_pad($index + 1, 3, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => $jual[2],
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
