@extends('master')

@section('title','Data Barang')

@section('content')
    <div class="content mt-3">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Barang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('barang/tambah')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Tambah
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>ID Barang</td>
                        <td>Nomor</td>
                        <td>Jenis Barang</td>
                        <td>Merk</td>
                        <td>Harga</td>
                        <td>Stock Barang</td>
                        <td></td>
                    </tr>
                    @foreach($barang as $brg)
                    <tr>
                        <td>{{$brg->id}}</td>
                        <td>{{$brg->nomor}}</td>
                        <td>{{$brg->jenis_barang}}</td>
                        <td>{{$brg->merk}}</td>
                        <td>{{$brg->harga}}</td>
                        <td>{{$brg->stock}}</td>
                        <td>
                            <a href="/barang/edit/{{$brg->id}}" class="btn btn-primary btm-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/barang/hapus/{{$brg->id}}" class="btn btn-danger btn-sm" onclick="return
                            confirm('Anda yakin mau menghapus data ini?')">
                            <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>

    </div>
@endsection