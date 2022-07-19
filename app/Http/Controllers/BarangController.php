<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//call library query builder in laravel
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //add method index
    function index() {
        $index = DB::table('barang')->get();
        return view('barang', ['barang'=>$index]);
    }
    function barang() {
        //get data in barang table
        $barang = DB::table('barang')->get();
        //passing data barang for view barang
        return view ('barang', ['barang'=>$barang]);
    }
    //added method view tambah barang
    function tambah() {
        return view ('tambah_barang');
    }
    //
    function simpan(Request $request) {
        DB::table('barang')->insert([
            'id'=>$request->id,
            'nomor'=>$request->nomor,
            'jenis_barang'=>$request->jenis_barang,
            'merk'=>$request->merk,
            'harga'=>$request->harga,
            'stock'=>$request->stock
        ]);
        return redirect('/barang');
    }
    //
    function ubah($id) {
        $barang = DB::table('barang')->where('id',$id)->get();
        return view('edit', ['barang'=>$barang]);
    }
    //
    function update(Request $request) {
        DB::table('barang')->where('id',$request->id)->update([
            'id'=>$request->id,
            'nomor'=>$request->nomor,
            'jenis_barang'=>$request->jenis_barang,
            'merk'=>$request->merk,
            'harga'=>$request->harga,
            'stock'=>$request->stock
        ]);
        return redirect('/barang');
    }
    //
    function hapus($id) {
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/barang');
    }
}
