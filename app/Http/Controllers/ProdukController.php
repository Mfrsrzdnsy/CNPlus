<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = ProdukModel::all();
        return view('produk.index', compact('produks'));
    }

    public function create()

    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required|string|max:15',
            'nama_produk' => 'required|string|max:30',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'status_produk' => 'required|in:tunai,kredit,konsinyasi',
            'kelompok_produk' => 'required|string',
            'stok' => 'nullable|integer|min:0',
        ]);


        ProdukModel::insert([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'status_produk' => $request->status_produk,
            'kelompok_produk' => $request->kelompok_produk,
            'stok' => $request->stok,
        ]);

        return redirect()->route('produk.index')->with('success', 'Data Barang Berhasil Ditambahkan !!!');
    }

    public function edit(string $kode_produk)
    {
        $data = ProdukModel::findOrFail($kode_produk);
        return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $kode_produk)
    {
        $skode_produk = $request->id;
        ProdukModel::findOrFail($kode_produk)->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'status_produk' => $request->status_produk,
            'kelompok_produk' => $request->kelompok_produk,
            'stok' => $request->stok,
        ]);

        return redirect()->route('produk.index')->with('success', 'Data Barang Berhasil Diupdate !!!');
    }


    public function destroy($kode_produk)
    {
        ProdukModel::findOrFail($kode_produk)->delete();

        return redirect()->route('produk.index')->with('success', 'Data Barang Berhasil Dihapus !!!');
    }



}
