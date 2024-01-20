
<<<<<<< HEAD
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="theme-color" content="#000000">
        <title>Mobilekit Mobile UI Kit</title>
        <meta name="description" content="Mobilekit HTML Mobile UI Kit">
        <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html, responsive" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
        <link rel="stylesheet" href="{{ asset('siswa/assets/css/style.css') }}">
        <link rel="manifest" href="{{ asset('siswa/__manifest.json') }}">
    </head>

    <body>

        <!-- loader -->
        <div id="loader">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
        <!-- * loader -->

        <!-- App Header -->
        <div class="appHeader bg-primary scrolled">
            {{-- <div class="left">
                <a href="{{ 'dashboard.user.' }}" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                    <ion-icon name="menu-outline"></ion-icon>
                </a>
            </div> --}}
            <div class="pageTitle">
                Discover
            </div>
            <div class="right">
                <a href="javascript:;" class="headerButton toggle-searchbox">
                    <ion-icon name="search-outline"></ion-icon>
                </a>
            </div>
        </div>
        <!-- * App Header -->

        <!-- Search Component -->
        <div id="search" class="appHeader">
            <form class="search-form">
                <div class="form-group searchbox">
                    <input type="text" class="form-control" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline"></ion-icon>
                    </i>
                    <a href="javascript:;" class="ml-1 close toggle-searchbox">
                        <ion-icon name="close-circle"></ion-icon>
                    </a>
                </div>
            </form>
        </div>
        <!-- * Search Component -->

        <!-- App Capsule -->
        <div id="appCapsule">

            <div class="header-large-title">
                <h1 class="title">Discover</h1>
                <h4 class="subtitle">Welcome to Mobilekit</h4>
            </div>

            <div class="section full mt-3 mb-3">
                <div class="carousel-multiple owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2088px; padding-left: 32px; padding-right: 32px;">
                            <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d3.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Great for phones &amp; tablets</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d4.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Change the styles in one file</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d5.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Written with a code structure</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d1.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Progressive web app ready</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d2.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Reusable components</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d3.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Great for phones &amp; tablets</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d4.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Change the styles in one file</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d5.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Written with a code structure</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d1.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Progressive web app ready</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d2.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Reusable components</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ asset('siswa/assets/img/sample/photo/d3.jpg') }}"
                                            class="card-img-top" alt="image">
                                        <div class="card-body pt-2">
                                            <h4 class="mb-0">Great for phones &amp; tablets</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>

            </div>


            <div class="section mt-3 mb-3">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-end">
                        <div>
                            <h6 class="card-subtitle">Discover</h6>
                            <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                                Dark Mode
                            </h5>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                            <label class="custom-control-label" for="darkmodeswitch"></label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section mt-3 mb-3">
                <div class="card">
                    <img src="{{ asset('siswa/assets/img/sample/photo/wide4.jpg') }}" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h6 class="card-subtitle">Discover</h6>
                        <h5 class="card-title">Components</h5>
                        <p class="card-text">
                            Reusable components designed for the mobile interface and ready to use.
                        </p>
                        <a href="app-components.html" class="btn btn-primary">
                            <ion-icon name="cube-outline" role="img" class="md hydrated" aria-label="cube outline">
                            </ion-icon>
                            Preview
                        </a>
                    </div>
                </div>
            </div>

            <div class="section mt-3 mb-3">
                <div class="card">
                    <img src="{{ asset('siswa/assets/img/sample/photo/wide2.jpg') }}" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h6 class="card-subtitle">Discover</h6>
                        <h5 class="card-title">Pages</h5>
                        <p class="card-text">
                            Mobilekit comes with basic pages you may need and use in your projects easily.
                        </p>
                        <a href="app-pages.html" class="btn btn-primary">
                            <ion-icon name="layers-outline" role="img" class="md hydrated" aria-label="layers outline">
                            </ion-icon>
                            Preview
                        </a>
                    </div>
                </div>
            </div>


            <!-- app footer -->
            <div class="appFooter">
                <img src="{{ asset('siswa/assets/img/logo.png') }}" alt="icon" class="footer-logo mb-2">
                <div class="footer-title">
                    Copyright © Mobilekit 2020. All Rights Reserved.
                </div>
                <div>Mobilekit is PWA ready Mobile UI Kit Template.</div>
                Great way to start your mobile websites and pwa projects.

                <div class="mt-2">
                    <a href="javascript:;" class="btn btn-icon btn-sm btn-facebook">
                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook">
                        </ion-icon>
                    </a>
                    <a href="javascript:;" class="btn btn-icon btn-sm btn-twitter">
                        <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter">
                        </ion-icon>
                    </a>
                    <a href="javascript:;" class="btn btn-icon btn-sm btn-linkedin">
                        <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin">
                        </ion-icon>
                    </a>
                    <a href="javascript:;" class="btn btn-icon btn-sm btn-instagram">
                        <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram">
                        </ion-icon>
                    </a>
                    <a href="javascript:;" class="btn btn-icon btn-sm btn-whatsapp">
                        <ion-icon name="logo-whatsapp" role="img" class="md hydrated" aria-label="logo whatsapp">
                        </ion-icon>
                    </a>
                    <a href="index.html#" class="btn btn-icon btn-sm btn-secondary goTop">
                        <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                        </ion-icon>
                    </a>
                </div>

            </div>

            <!-- * app footer -->

        </div>
        <!-- * App Capsule -->


        <!-- App Bottom Menu -->
        <div class="appBottomMenu">
            <a href="{{route('dashboard.')}}" class="item">
                <div class="col">
                    <ion-icon name="home-outline"></ion-icon>
                    <strong>Dashboard</strong>
                </div>
            </a>
            <a href="{{route('dashboard.siswa.riwayat_pembayaran')}}" class="item">
                <div class="col">
                    <ion-icon name="refresh-outline"></ion-icon>
                    <strong>Riwayat</strong>
                </div>
            </a>
            {{-- <a href="page-chat.html" class="item">
                <div class="col">
                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    <span class="badge badge-danger">5</span>
                    <strong>Absen</strong>
                </div>
            </a> --}}
            <a href="{{route('dashboard.siswa.pembayaran')}}" class="item">
                <div class="col">
                    <ion-icon name="cash-outline"></ion-icon>
                    <strong>Pembayaran</strong>
                </div>
            </a>
            <a href="{{route('dashboard.siswa.profile')}}" class="item">
                <div class="col">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <strong>Profile</strong>
                </div>
            </a>
        </div>
        <!-- * App Bottom Menu -->

        <!-- App Sidebar -->
        <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">

                        <!-- profile box -->
                        <div class="profileBox">
                            <div class="image-wrapper">
                                <img src="{{ asset('siswa/assets/img/sample/avatar/avatar1.jpg') }}" alt="image"
                                    class="imaged rounded">
                            </div>
                            <div class="in">
                                <strong>{{Auth::user()->siswa->nama_siswa}}</strong>
                                <div class="text-muted">
                                    <ion-icon name="location"></ion-icon>
                                    California
                                </div>
                            </div>
                            <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                                <ion-icon name="close"></ion-icon>
                            </a>
                        </div>
                        <!-- * profile box -->

                        <ul class="listview flush transparent no-line image-listview mt-2">
                            <li>
                                <a href="index.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="home-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Discover
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="app-components.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="cube-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        Components
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="app-pages.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="layers-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        <div>Pages</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-chat.html" class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        <div>Chat</div>
                                        <span class="badge badge-danger">5</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="moon-outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        <div>Dark Mode</div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input dark-mode-switch"
                                                id="darkmodesidebar">
                                            <label class="custom-control-label" for="darkmodesidebar"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="listview-title mt-2 mb-1">
                            <span>Friends</span>
                        </div>
                        <ul class="listview image-listview flush transparent no-line">
                            <li>
                                <a href="page-chat.html" class="item">
                                    <img src="{{ asset('siswa/assets/img/sample/avatar/avatar7.jpg') }}" alt="image"
                                        class="image">
                                    <div class="in">
                                        <div>Sophie Asveld</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-chat.html" class="item">
                                    <img src="{{ asset('siswa/assets/img/sample/avatar/avatar3.jpg') }}" alt="image"
                                        class="image">
                                    <div class="in">
                                        <div>Sebastian Bennett</div>
                                        <span class="badge badge-danger">6</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-chat.html" class="item">
                                    <img src="{{ asset('siswa/assets/img/sample/avatar/avatar10.jpg') }}" alt="image"
                                        class="image">
                                    <div class="in">
                                        <div>Beth Murphy</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-chat.html" class="item">
                                    <img src="{{ asset('siswa/assets/img/sample/avatar/avatar2.jpg') }}" alt="image"
                                        class="image">
                                    <div class="in">
                                        <div>Amelia Cabal</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="page-chat.html" class="item">
                                    <img src="{{ asset('siswa/assets/img/sample/avatar/avatar5.jpg') }}" alt="image"
                                        class="image">
                                    <div class="in">
                                        <div>Henry Doe</div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <!-- sidebar buttons -->
                    <div class="sidebar-buttons">
                        <a href="javascript:;" class="button">
                            <ion-icon name="person-outline"></ion-icon>
                        </a>
                        <a href="javascript:;" class="button">
                            <ion-icon name="archive-outline"></ion-icon>
                        </a>
                        <a href="javascript:;" class="button">
                            <ion-icon name="settings-outline"></ion-icon>
                        </a>
                        <a href="javascript:void(0);"
                            onclick="formConfirmationId('#form-logout','Logout Dari Aplikasi?')" class="button">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </a>
                    </div>
                    <form action="{{ route('logout') }}" method="post" id="form-logout">
                        @csrf
                    </form>
                    <!-- * sidebar buttons -->
                </div>
            </div>
        </div>
        <!-- * App Sidebar -->

        {{--
        <!-- welcome notification  -->
        <div id="notification-welcome" class="notification-box">
            <div class="notification-dialog android-style">
                <div class="notification-header">
                    <div class="in">
                        <img src="{{asset('siswa/assets/img/icon/72x72.png"')}} alt="image" class="imaged w24">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href="index.html#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mobilekit</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
=======
@extends('layouts.siswa.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Dashboard')
<!-- App Header -->
    @section('pageTitle')
        Dashboard
    @stop
    @section('search')
        <a href="javascript:;" class="headerButton toggle-searchbox">
            <ion-icon name="search-outline"></ion-icon>
        </a>
    @stop
<!-- * App Header -->

@section('content')
    <div class="section mt-2">
        <div class="card mb-3">
            <div class="card-header bg-success">
                <h4>Biodata Siswa</h4>
            </div>
            <div class="card-body">
                <table class="table-sm">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td>{{ $siswa->nisn }}</td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td>{{ $siswa->tahun_ajaran->tahun_ajaran }}</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>{{ $siswa->jurusan->nama_jurusan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-success">
                <h4>Rincian Pembayaran</h4>
            </div>
            <div class="card-body">
                <table class="table-sm">
                    <tbody>
                        @foreach ($detail_biayas as $item)
                            <tr>
                                <td>Biaya {{ $item->biaya->nama_biaya }}</td>
                                <td>:</td>
                                <td>Rp. {{ $item->jumlah_biaya }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-success">
                <h4>Detail Pembayaran</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-sm table-bordered table-striped">
                        <thead>
                            <th>Biaya</th>
                            <th>Total Biaya</th>
                            <th>Sudah Bayar</th>
                            <th>Sisa</th>
                        </thead>
                        <tbody>
                            @foreach ($detail_biayas as $item)
                                @php
                                    $total = $item->biaya_id == 1 ? $item->jumlah_biaya * 36 : $item->jumlah_biaya;
                                    $sudah_bayar = $riwayat_pembayarans->where('biaya_id', $item->biaya_id)->sum('jumlah_bayar');
                                    $sisa = $total - $sudah_bayar;
                                @endphp
                            <tr>
                                <td>{{$item->biaya->nama_biaya}}</td>
                                <td>Rp. {{$total}}</td>
                                <td>Rp. {{$sudah_bayar}}</td>
                                <td>Rp. {{$sisa}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr/>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Total Pembayaran</td>
                            <td>:</td>
                            <td>Rp. {{$total_bayar}}</td>
                        </tr>
                        <tr>
                            <td>Sudah Bayar</td>
                            <td>:</td>
                            <td>Rp. {{ $riwayat_pembayarans->sum('jumlah_bayar') }}</td>
                        </tr>
                        <tr>
                            <td>Belum Bayar</td>
                            <td>:</td>
                            <td>Rp. {{ $total_bayar - $riwayat_pembayarans->sum('jumlah_bayar')}}</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-hint mt-1">Note: Biaya UDB dikali 36 bulan</p>
                <hr/>
            </div>

                {{-- riwayat pembayaran --}}
            <div class="section mt-2">
                <div class="card mb-3">
                    <div class="card-header bg-success">
                        <h4>Riwayat Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <th>#</th>
                                    <th>No Kwitansi</th>
                                    <th>Pembayaran</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah Pembayaran</th>
                                    <th>Keterangan</th>
                                </thead>
                                <tbody>
                                    @forelse ($riwayat_pembayarans as $no => $riwayat_pembayaran)
                                        <tr>
                                            <td>{{$no+1}}</td>
                                            <td>{{$riwayat_pembayaran->no_kwitansi}}</td>
                                            <td>{{$riwayat_pembayaran->biaya->nama_biaya}}</td>
                                            <td>{{$riwayat_pembayaran->created_at->format('d-m-Y')}}</td>
                                            <td>{{$riwayat_pembayaran->jumlah_bayar}}</td>
                                            <td>{{$riwayat_pembayaran->keterangan}}</td>
                                        </tr>
                                    @empty
                                        <h3>Belum Ada Data Pembayaran</h3>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
>>>>>>> 6f050547a0c0fa83828eb9715faede86631d17e6
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<<<<<<< HEAD
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset(' siswa/assets/js/lib/jquery-3.4.1.min.js') }}"></script>
                        @include('layouts.scripts.dataTable')
                        @include('layouts.scripts.sweetalert')
                        <!-- Bootstrap-->
                        <script src="{{ asset('siswa/assets/js/lib/popper.min.js') }}"></script>
                        <script src="{{ asset('siswa/assets/js/lib/bootstrap.min.js') }}"></script>
                        <!-- Ionicons -->
                        <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js">
                        </script>
                        <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
                        <!-- Owl Carousel -->
                        <script src="{{ asset('siswa/assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
                        <!-- Base Js File -->
                        <script src="{{ asset('siswa/assets/js/base.js') }}"></script>

                        {{-- <script>
                            setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
                        </script> --}}

    </body>

</html>
=======
>>>>>>> 6f050547a0c0fa83828eb9715faede86631d17e6
