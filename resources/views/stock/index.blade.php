@extends('layouts.app')
@section('content')

 <div class="container">


<form class="form" method="get" action="{{ route('search') }}">
		<div class = "form-group w-25 mb-3">
			<label for="search" class="d-block mr-2">Pencarian</label>
			<input type="text"name="search" class="form-control w-75 d-inline" id="search" placeholder="cari berdasarkan nama">
			<button type="submit" class="btn btn-primary mb-1">Cari</button>
		</div>
</form>
<h3>Daftar Stock Mobil <a href="{{ url('stock/create') }}">Tambah Data</a></h3>
<div class="table">
 <table>
 	<tr>
        <td>Kode Mobil</td>
 		<td>Nama Mobil</td>
 		<td>Warna</td>
 		<td>Jenis</td>
 		<td>Tahun</td>
        <td>Jumlah</td>
        <td>Harga</td>
 	</tr>

 @foreach($rows as $row)
 <tr>
    <td>{{ $row->stock_kode}}</td>
 	<td>{{ $row->stock_nama}}</td>
 	<td>{{ $row->stock_warna }}</td>
 	<td>{{ $row->stock_jenis }}</td>
    <td>{{ $row->stock_tahun }}</td>
 	<td>{{ $row->stock_jumlah }}</td>
    <td>{{ $row->stock_harga }}</td>
    <td><a href="{{ url('stock/' . $row->stock_id . '/edit') }}">Edit</a></td>
    <td> <form action="{{ url('stock/' . $row->stock_id) }}" method="POST">
        <input name="_method" type="hidden" value="DELETE">
        @csrf
        <button>Hapus</button>
        </form>
    </td>
 </tr>
 @endforeach
 </table>
</div>
 </div>

 @endsection