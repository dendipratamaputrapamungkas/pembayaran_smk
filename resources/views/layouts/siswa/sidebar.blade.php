<div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ route('dashboard.') }}">
        <span class="align-middle">AdminKit</span>
    </a>

    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{route('dashboard.siswa.riwayat_pembayaran')}}" class="sidebar-link">
                <i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">
                    Riwayat</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('dashboard.siswa.pembayaran')}}" class="sidebar-link">
                <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">
                    Pembayaran</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('dashboard.siswa.profile')}}" class="sidebar-link">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">
                    Profile</span>
            </a>
        </li>
    </ul>
</div>
