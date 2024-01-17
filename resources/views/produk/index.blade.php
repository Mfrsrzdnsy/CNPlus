@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Anak</h6>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('produk.create') }}" class="btn btn-primary ml-auto me-2">Tambah Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produks as $produk)
                                        <tr>
                                            <td>{{ $produk->kode_produk }}</td>
                                            <td>{{ $produk->nama_produk }}</td>
                                            <td>{{ 'Rp ' . number_format($produk->harga_beli, 0, ',', '.') }}</td>
                                            <td>{{ 'Rp ' . number_format($produk->harga_jual, 0, ',', '.') }}</td>
                                            <td style="display: flex">
                                                <button type="button" class="btn btn-primary" style="margin-right: 5px;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#memberModal_{{ $produk->kode_produk }}"><i class="far fa-eye"></i></button>
                                                <div class="modal fade" id="memberModal_{{ $produk->kode_produk }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card mx-auto" style="width: 25rem;">
                                                                    <div class="card-body">
                                                                        <table class="table" border="0">
                                                                            <tr>
                                                                                <td>Kode Produk</td>
                                                                                <td>: {{ $produk->kode_produk }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Nama Produk</td>
                                                                                <td>: {{ $produk->nama_produk }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Harga Beli</td>
                                                                                <td>: {{ 'Rp ' . number_format($produk->harga_beli, 0, ',', '.') }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Harga Jual</td>
                                                                                <td>: {{ 'Rp ' . number_format($produk->harga_jual, 0, ',', '.') }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Status Produk</td>
                                                                                <td>: {{ $produk->status_produk }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kelompok Produk</td>
                                                                                <td>: {{ $produk->kelompok_produk }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Stok</td>
                                                                                <td>: {{ $produk->stok }}</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="{{ route('produk.edit', $produk->kode_produk) }}" class="btn btn-warning"
                                                    style="margin-right: 5px;"><i class="far fa-edit"></i></a>

                                                    <form id="deleteForm{{ $produk->kode_produk }}" method="POST" action="{{ route('produk.destroy', $produk->kode_produk) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button" class="btn btn-danger" style="margin-right: 5px;" onclick="confirmDelete('{{ $produk->kode_produk }}')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    </script>

<script>
    function confirmDelete(siswaId) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus data anak ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user clicks "Ya, Hapus!", submit the form
                document.getElementById('deleteForm' + siswaId).submit();
            }
        });
    }
</script>
@endsection
