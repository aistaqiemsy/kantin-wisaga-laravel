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
}
