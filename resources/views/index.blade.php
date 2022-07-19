@extends('master')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li  class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Barang</strong>
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
                    </tr>
                </table>
            </div>

        </div>

    </div>
@endsection