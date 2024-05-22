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
                'id_penjual' => $request->txIdPenjual,
                'nama' => $request->txNama,
                'harga' => $request->txHarga
            ]);
            return redirect('/barang');
    }

    public function HapusBarang($id) {
        DB::table('tb_barang')->where('id_barang', $id)->delete();

        return redirect('/barang');
    }

    public function UbahBarang($id) {
        $barang = DB::table('tb_barang')->where('id_barang', $id)->get();
        //['barang' => $barang] harus sama namanya, yang dalam petik tidak menggunakan $
        return view('ubah', ['barang' => $barang]);
    }

    public function PerbaruiBarang(Request $request) {
        DB::table('tb_barang')->where('id_barang', $request->id)->update([
                'id_penjual' => $request->txUpID,
                'nama' => $request->txUpNama,
                'harga' => $request->txUpHarga
            ]);
            return redirect('/barang');
    }
}
