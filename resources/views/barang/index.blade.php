@extends('layout.app')

@section('content')
<div class="container">
        <h1 class="text-center">Daftar Barang</h1>
        <div class="table-responsive mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_barang as $barang)
                    <tr>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.' )}}</td>
                        <td><form action="">Tambah Barang</form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <p></p>

        </div>
    </div>