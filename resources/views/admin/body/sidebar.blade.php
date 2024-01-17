<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            CN<span>PLUS</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    @php
                $id = Illuminate\Support\Facades\Auth::user()->id;
                $profileData = App\Models\User::find($id);
            @endphp
    <div class="sidebar-body">
        <div class="d-flex flex-row align-items-center border-bottom px-5 py-3">
            <div class="me-3">
                <img class="wd-50 ht-50 rounded-circle" src="{{ asset('img/boy.png') }}" alt="">
            </div>
            <div class="text-center">
                <p class="tx-16 fw-bolder">{{ $profileData->name }}</p>
                <p class="tx-12 text-muted">{{ $profileData->email }}</p>
            </div>
        </div>

        <ul class="nav">
            <li class="nav-item nav-category text-center" style="font-size: 18px;">Menu Utama</li> <hr>
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#fileMasterDropdown" role="button" aria-expanded="false" aria-controls="fileMasterDropdown">
        <i class="link-icon" data-feather="folder"></i>
        <span class="link-title">File Master</span>
        <i class="mdi mdi-chevron-down float-end"></i>
    </a>
    <div class="collapse" id="fileMasterDropdown">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="/user">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produk">
                    <i class="link-icon" data-feather="table"></i>
                    <span class="link-title">Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Karyawan</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#fileTransaksiDropdown" role="button" aria-expanded="false" aria-controls="fileTransaksiDropdown">
        <i class="link-icon" data-feather="folder"></i>
        <span class="link-title">File Transaksi</span>
        <i class="mdi mdi-chevron-down float-end"></i>
    </a>
    <div class="collapse" id="fileTransaksiDropdown">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="link-icon" data-feather="credit-card"></i>
                    <span class="link-title">Transaksi Pembelian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="link-icon" data-feather="credit-card"></i>
                    <span class="link-title">Transaksi Penjualan</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#fileLaporanDropdown" role="button" aria-expanded="false" aria-controls="fileLaporanDropdown">
        <i class="link-icon" data-feather="folder"></i>
        <span class="link-title">File Laporan</span>
        <i class="mdi mdi-chevron-down float-end"></i>
    </a>
    <div class="collapse" id="fileLaporanDropdown">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Laporan Pembelian</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Laporan Penjualan</span>
                </a>
            </li>
        </ul>
    </div>
</li>


        </ul>
    </div>
</nav>
