@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Pondok Yatim')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-black text-center">
          <!-- <img width=100 height=120 src='img/bg.png'> -->
            {{ __('Selamat Datang Di Beranda Sistem Informasi Pondok Yatim') }}
          </h1>
      </div>
  </div>
</div>
@endsection
