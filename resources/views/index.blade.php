@extends('layout')
@section('content')
@include('partials.banner')
@include('partials.portfolio')

<!-- Start Kategori Section -->
<section id="kategori" class="bg-light">
  <div class="container py-5">
    <!-<!-- Title Section -->
<div class="row text-center py-5">
  <div class="col-lg-6 m-auto">
    <h1 class="display-4 fw-bold mb-3" style="color: #2c3e50;">Kategori Layanan</h1>
    <hr class="mx-auto mb-4" style="width: 60px; border-top: 3px solid #28a745;">
    <p class="lead text-muted">Pilih kategori sesuai kebutuhan Anda: IT, Jasa, dan Alat Tulis Kantor (ATK).</p>
  </div>
</div>

<div class="row">
  <!-- IT -->
  <div class="col-12 col-md-4 mb-4">
    <div class="card h-100 shadow-sm border-0">
      <a href="#">
        <img src="assets/img/feature_prod_02.jpg" class="card-img-top" alt="IT">
      </a>
      <div class="card-body text-center">
        <a href="#" class="h4 fw-bold text-decoration-none text-dark d-block mb-2">IT</a>
        <p class="card-text text-muted">Komputer, laptop, server, printer, serta layanan instalasi & pemeliharaan perangkat IT.</p>
        <span class="text-success fw-semibold">Perangkat & Solusi Teknologi</span>
      </div>
    </div>
  </div>

  <!-- Jasa -->
  <div class="col-12 col-md-4 mb-4">
    <div class="card h-100 shadow-sm border-0">
      <a href="#">
        <img src="assets/img/feature_prod_01.jpg" class="card-img-top" alt="Jasa">
      </a>
      <div class="card-body text-center">
        <a href="#" class="h4 fw-bold text-decoration-none text-dark d-block mb-2">Jasa</a>
        <p class="card-text text-muted">Layanan teknisi, konsultasi IT, pelatihan, hingga penyewaan peralatan multimedia.</p>
        <span class="text-success fw-semibold">Layanan Profesional</span>
      </div>
    </div>
  </div>

  <!-- ATK -->
  <div class="col-12 col-md-4 mb-4">
    <div class="card h-100 shadow-sm border-0">
      <a href="#">
        <img src="assets/img/feature_prod_03.jpg" class="card-img-top" alt="ATK">
      </a>
      <div class="card-body text-center">
        <a href="#" class="h4 fw-bold text-decoration-none text-dark d-block mb-2">ATK</a>
        <p class="card-text text-muted">Pulpen, kertas, buku, map, dan perlengkapan kantor lainnya dengan kualitas terbaik.</p>
        <span class="text-success fw-semibold">Alat Tulis Kantor</span>
      </div>
    </div>
  </div>
</div>

<!-- End Kategori Section -->

</body>
</html>
@endsection