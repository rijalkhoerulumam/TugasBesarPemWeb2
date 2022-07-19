@extends('master')

@section('title','Halaman Edit Barang')

@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Update Barang</strong>
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
                    @foreach($barang as $brg)
                        <form method="post" action="/barang/update">
                            {{csrf_field()}}
                            <input type="text" name="id" id="id" value="{{$brg->id}}" hidden>
                            <label for="nomor">Nomor Barang </label>
                            <input type="text" name="nomor" id="nomor" value="{{$brg->nomor}}"><br>
                            <label for="jenis_barang">Jenis Barang </label>
                            <input type="text" name="jenis_barang" id="jenis_barang" value="{{$brg->jenis_barang}}"><br>
                            <label for="merk">Merk </label>
                            <input type="text" name="merk" id="merk" value="{{$brg->merk}}"><br>
                            <label for="harga">Harga </label>
                            <input type="text" name="harga" id="harga" value="{{$brg->harga}}"><br>
                            <label for="stock">Stock </label>
                            <input type="text" name="stock" id="stock" value="{{$brg->stock}}"><br>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection