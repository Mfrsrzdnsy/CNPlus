@extends('admin.admin_dashboard')

@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Statistik dan Grafik -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistik Penjualan Bulanan</h5>
                    <canvas id="penjualanChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Tabel Data -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Penjualan</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Pendapatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Produk A</td>
                                    <td>50</td>
                                    <td>$500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Produk B</td>
                                    <td>30</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Produk B</td>
                                    <td>30</td>
                                    <td>$300</td>
                                </tr>
                                <!-- Tambahkan data lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <!-- Pemberitahuan dan Notifikasi -->
            <div class="card">
                <div class="card-body">
                    <!-- Isi dengan pemberitahuan atau notifikasi -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Shortcut atau Menu Cepat -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Menu Cepat</h5>

                    <!-- Tautan cepat ke halaman-halaman yang sering digunakan -->
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="list-group-item"><a href="/penjualan">Penjualan</a></li>
                        <li class="list-group-item"><a href="/produk">Produk</a></li>
                        <!-- Tambahkan tautan lain sesuai kebutuhan -->
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <!-- Ringkasan Informasi -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ringkasan Informasi</h5>

                    <!-- Contoh ringkasan informasi -->
                    <ul class="list-group">
                        <li class="list-group-item">Total Penjualan: 100</li>
                        <li class="list-group-item">Total Produk: 50</li>
                        <li class="list-group-item">Pengguna Aktif: 20</li>
                        <!-- Tambahkan informasi lain sesuai kebutuhan -->
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Widget dan Card -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Widget Title</h5>
                    <p class="card-text">Deskripsi singkat tentang widget ini.</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>


        <!-- Navigasi atau Sidebar -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Menu Navigasi</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pengaturan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-8">
            <!-- Widget Aktivitas Terkini -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aktivitas Terkini</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Pembaruan 1 - 01 Januari 2024</li>
                        <li class="list-group-item">Pembaruan 2 - 02 Januari 2024</li>
                        <li class="list-group-item">Pembaruan 3 - 03 Januari 2024</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <!-- Formulir Pencarian -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cari Data</h5>
                    <form action="" method="GET">
                        <div class="mb-3">
                            <label for="search" class="form-label">Kata Kunci</label>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan kata kunci">
                        </div>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
