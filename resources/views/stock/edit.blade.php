@extends('layouts.app')

@section('content')

 <div class="container">

 	<h3>Edit Data Mobil</h3>
     <form action="{{ url('/stock/' . $row->stock_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
		 @csrf
	 	<table>
            <tr>
                <td>Kode</td>
                <td><input type="text" name="stock_kode" value="{{ $row->stock_kode }}"></td>
            </tr>
 			<tr>
 				<td>Nama Mobil</td>
 				<td><input type="text" name="stock_nama" value="{{ $row->stock_nama }}"></td>
	 		</tr>
 			<tr>
 				<td>Warna</td>
 				<td><input type="text" name="stock_warna" value="{{ $row->stock_warna }}"></td>
 			</tr>
 			<tr>
 				<td>Jenis</td>
 				<td>
					<select name="stock_jenis" class="form-control">
						<option value="">{{ $row->stock_jenis }}</option>
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
 				<td><input type="text" name="stock_tahun" value="{{ $row->stock_tahun }}"></td>
 			</tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="stock_jumlah" value="{{ $row->stock_jumlah }}"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="stock_harga" value="{{ $row->stock_harga }}"></td>
            </tr>
 			<tr>
 				<td></td>

 				<td><input type="submit" value="UPDATE"></td>
 			</tr>
 		</table>
 	</form>
 </div>

 @endsection