@extends('layouts.app')

@section('content')

 <div class="container">

 	<h3>Tambah Data Mobil</h3>
	 <form action="{{ url('/stock') }}" method="POST">
		 @csrf
	 	<table>
            <tr>
                <td>Kode</td>
                <td><input type="text" name="stock_kode"></td>
            </tr>
 			<tr>
 				<td>Nama Mobil</td>
 				<td><input type="text" name="stock_nama"></td>
	 		</tr>
 			<tr>
 				<td>Warna</td>
 				<td><input type="text" name="stock_warna"></td>
 			</tr>
 			<tr>
 				<td>Jenis</td>
 				<td>
					<select name="stock_jenis" class="form-control">
						<option value="">--Pilih Jenis Mobil--</option>
						<option value="SUV">SUV</option>
						<option value="APV">APV</option>
						<option value="Sport">Sport</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="Crossover">Crossover</option>
					</select>
				</td>
 			</tr>
 			<tr>
 				<td>Tahun</td>
 				<td><input type="text" name="stock_tahun"></td>
 			</tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="stock_jumlah"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="stock_harga"></td>
            </tr>
 			<tr>
 				<td></td>

 				<td><input type="submit" value="SIMPAN"></td>
 			</tr>
 		</table>
 	</form>
 </div>

 @endsection