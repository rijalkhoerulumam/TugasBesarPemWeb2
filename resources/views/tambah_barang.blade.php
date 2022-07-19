@extends('master')

@section('title','Halaman Tambah Barang')

@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Tambah Barang</strong>
            </div>
            <div class="pull-right">
                <a href="{{url('barang')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo">Kembali</i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form method="post" action="/barang/simpan">
                        {{csrf_field()}}
                        <input type="text" name="id" id="id" hidden>
                        <label for="nomor_barang">Nomor</label>
                        <input type="text" name="nomor" id="nomor"><br>
                        <label for="nama_barang">Jenis Barang </label>
                        <input type="text" name="jenis_barang" id="jenis_barang"><br>
                        <label for="harga">Merk </label>
                        <input type="text" name="merk" id="merk"><br>
                        <label for="harga">Harga </label>
                        <input type="text" name="harga" id="harga"><br>
                        <label for="stock">Stock </label>
                        <input type="text" name="stock" id="stock"><br>
                        <hr>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection