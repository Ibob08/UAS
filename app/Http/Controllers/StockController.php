<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stock;
class StockController extends Controller
{
    
    public function index()
    {
        $rows = stock::all();
        return view('stock.index', compact('rows'));
    }

    
    public function create()
    {
        return view('stock.add');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'stock_kode' => 'bail|required|unique:tb_stock_mobil',
            'stock_nama' => 'required'
         ],
         [
             'stock_kode.required' => 'Kode wajib diisi',
             'stock_kode.unique' => 'Kode sudah ada',
             'stock_nama.required' => 'Nama wajib diisi'
         ]);
    
         stock::create([
             'stock_kode' => $request->stock_kode,
             'stock_nama' => $request->stock_nama,
             'stock_warna' => $request->stock_warna,
             'stock_jenis' => $request->stock_jenis,
             'stock_tahun' => $request->stock_tahun,
             'stock_jumlah' => $request->stock_jumlah,
             'stock_harga' => $request->stock_harga,
         ]);
    
        return redirect('stock');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $row = stock::findOrFail($id);
        return view('stock.edit', compact('row'));

    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'stock_kode' => 'bail|required|unique:tb_stock_mobil',
            'stock_nama' => 'required'
         ],
         [
             'stock_kode.required' => 'Kode wajib diisi',
             'stock_kode.unique' => 'Kode sudah ada',
             'stock_nama.required' => 'Nama wajib diisi'
         ]);
    
         $row = stock::findOrFail($id);
         $row->update([
             'stock_kode' => $request->stock_kode,
             'stock_nama' => $request->stock_nama,
             'stock_warna' => $request->stock_warna,
             'stock_jenis' => $request->stock_jenis,
             'stock_tahun' => $request->stock_tahun,
             'stock_jumlah' => $request->stock_jumlah,
             'stock_harga' => $request->stock_harga,
         ]);
    
        return redirect('stock');
    }

    
    public function destroy($id)
    {
        $row = stock::findOrFail($id);
        $row->delete();

        return redirect('stock');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        
        $rows = stock::where(
           
            'stock_nama','like',"%".$keyword."%" 
            
            
        )->paginate(5);
        return view('stock.index', compact('rows'))->with('i',(request()->input('page',1)-1)*5);
    }
}
