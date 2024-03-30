<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(){
        // Insert
        // DB::insert('INSERT INTO m_level
        //     (level_kode, level_nama, created_at)
        //     VALUES(?, ?, ?)', ['CUS', 'Pelanggan', now()]);

        // return 'Insert data batu berhasil';


        // Update
        // $row = DB::update('UPDATE m_level SET
        // level_id = ? WHERE level_kode = ?', [4, 'CUS']);

        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';
        

        // Delete
        // $row = DB::update('DELETE FROM m_level WHERE level_kode = ?', 
        // ['CUS']);

        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';


        // Tampil Data
        $data = DB::select('SELECT * FROM m_level');
        return view('level', ['data' => $data]);
    }
}
