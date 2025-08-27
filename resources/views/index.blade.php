@extends('layout')
@section('content')
@include('partials.banner')
@include('partials.portfolio')

<!-- Start Kategori Section -->
<section id="kategori" class="bg-light">
  <div class="container py-5">
    <!-- Title -->
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Kategori Produk</h1>
        <p>Pilih kategori sesuai kebutuhan Anda: IT, Jasa, dan Alat Tulis Kantor (ATK).</p>
      </div>
    </div>

    <div class="row">
      <!-- IT -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
          <a href="#">
            <img src="assets/img/feature_prod_02.jpg" class="card-img-top" alt="IT">
          </a>
          <div class="card-body text-center">
            <a href="#" class="h2 text-decoration-none text-dark">IT</a>
            <p class="card-text">Komputer, laptop, server, printer, serta layanan instalasi & pemeliharaan perangkat IT.</p>
            <span class="text-muted">Perangkat & Solusi Teknologi</span>
          </div>
        </div>
      </div>

      <!-- Jasa -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
          <a href="#">
            <img src="assets/img/feature_prod_01.jpg" class="card-img-top" alt="Jasa">
          </a>
          <div class="card-body text-center">
            <a href="#" class="h2 text-decoration-none text-dark">Jasa</a>
            <p class="card-text">Layanan teknisi, konsultasi IT, pelatihan, hingga penyewaan peralatan multimedia.</p>
            <span class="text-muted">Layanan Profesional</span>
          </div>
        </div>
      </div>

      <!-- ATK -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
          <a href="#">
            <img src="assets/img/feature_prod_03.jpg" class="card-img-top" alt="ATK">
          </a>
          <div class="card-body text-center">
            <a href="#" class="h2 text-decoration-none text-dark">ATK</a>
            <p class="card-text">Pulpen, kertas, buku, map, dan perlengkapan kantor lainnya dengan kualitas terbaik.</p>
            <span class="text-muted">Alat Tulis Kantor</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Kategori Section -->

</body>
</html>
@endsection
