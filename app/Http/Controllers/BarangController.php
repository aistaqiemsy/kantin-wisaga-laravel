<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index() {
        $barang = DB::table('tb_barang')->get();
        return view('index', ['barang' => $barang]);
    }

    public function TambahBarang() {
        // return "Ingin tambah data ?";
        return view('tambahBarang');
    }

    public function simpanBarang(Request $request) {
        // return "Ingin tambah data ?";
        DB::table('tb_barang')->insert([
                // 'txIdPenjual' => $request->id_penjual,
                // 'txNama' => $request->nama,
                // 'txHarga' => $request->harga

                'id_penjual' => $request->txIdPenjual,
                'nama' => $request->txNama,
                'harga' => $request->txHarga
            ]);
            return redirect('/barang');
    }
}
