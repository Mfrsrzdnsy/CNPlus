@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Form Tambah Data Barang</h4>
                        <form id="produkForm" method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="kode_produk" class="form-label">Kode Produk</label>
                                    <div class="input-group">
                                        <input id="kode_produk" class="form-control" name="kode_produk" type="text">
                                        <a onclick="cari()" class="btn btn-primary"><i data-feather="search"></i></a>
                                    </div>
                                    @error('kode_produk')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input id="nama_produk" class="form-control" name="nama_produk" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="harga_beli" class="form-label">Harga Beli</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input id="harga_beli" class="form-control" name="harga_beli" type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="harga_jual" class="form-label">Harga Jual</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input id="harga_jual" class="form-control" name="harga_jual" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Status Produk</label>
                                    <select class="form-select" name="status_produk" id="status_produk">
                                        <option>--- Pilih Status ---</option>
                                        <option value="tunai">Tunai</option>
                                        <option value="kredit">Kredit</option>
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label">Kelompok Produk</label>
                                    <select class="form-select" name="kelompok_produk" id="kelompok_produk">
                                        <option>--- Pilih Kelompok ---</option>
                                        <option value="bekas">bekas</option>
                                        <option value="baru">baru</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="stok" class="form-label">Stok Barang</label>
                                    <input id="stok" class="form-control" name="stok" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary"> Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
