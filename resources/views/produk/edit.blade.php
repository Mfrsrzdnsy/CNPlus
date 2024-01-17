@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Form Tambah Data Barang</h4>
                        <form id="signupForm" method="POST" action="{{ route('produk.update', $data->kode_produk) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="kode_produk" class="form-label">Kode Produk</label>
                                    <input id="kode_produk" value="{{ $data->kode_produk }}" class="form-control" name="kode_produk" type="text">
                                    @error('kode_produk')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input id="nama_produk" value="{{ $data->nama_produk }}" class="form-control" name="nama_produk" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="harga_beli" class="form-label">Harga Beli</label>
                                    <input id="harga_beli" value="{{ $data->harga_beli }}" class="form-control" name="harga_beli" type="text">
                                </div>

                                <div class="col-md-6">
                                    <label for="harga_jual" class="form-label">Harga Jual</label>
                                    <input id="harga_jual" value="{{ $data->harga_jual }}" class="form-control" name="harga_jual" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Status Produk</label>
                                    <select class="form-select" name="status_produk" id="status_produk">
                                        <option>--- Pilih Status ---</option>
                                        <option value="tunai" @if ( $data->status_produk === 'tunai') selected @endif>Tunai</option>
                                        <option value="kredit" @if ( $data->status_produk === 'kredit') selected @endif>Kredit</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Kelompok Produk</label>
                                    <select class="form-select" name="kelompok_produk" id="kelompok_produk">
                                        <option>--- Pilih Kelompok ---</option>
                                        <option value="bekas" @if ( $data->kelompok_produk === 'bekas') selected @endif>bekas</option>
                                        <option value="baru" @if ( $data->kelompok_produk === 'baru') selected @endif>baru</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="stok" class="form-label">Stok Barang</label>
                                    <input id="stok" value="{{ $data->stok }}" class="form-control" name="stok" type="text">
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
