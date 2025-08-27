@extends('layout')
@section('content')
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Zetoro</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contact-header {
      background: linear-gradient(135deg, #28a745, #218838);
      color: white;
      padding: 80px 0;
      text-align: center;
    }
    .contact-info .card {
      border-radius: 15px;
      transition: transform 0.3s;
    }
    .contact-info .card:hover {
      transform: translateY(-5px);
    }
    .map-container iframe {
      border-radius: 15px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="contact-header">
    <h1>Hubungi Kami</h1>
    <p class="lead">Kami siap membantu kebutuhan teknologi Anda</p>
  </header>

  <!-- Kontak Info -->
  <section class="contact-info container my-5">
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="card shadow-sm p-4 h-100">
          <h5 class="text-success mb-3">Alamat</h5>
          <p>Jl. Contoh No. 123, Jakarta, Indonesia</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm p-4 h-100">
          <h5 class="text-success mb-3">Telepon</h5>
          <p>+62 812 3456 7890</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm p-4 h-100">
          <h5 class="text-success mb-3">Email</h5>
          <p>info@zetoro.com</p>
        </div>
      </div>
    </div>
  </section>

<!-- Maps + Teks Penawaran Tengah -->
<section class="container my-5">
  <div class="row align-items-center">
    <!-- Kiri: Maps -->
    <div class="col-md-6 mb-4 mb-md-0">
      <h3 class="text-success mb-3 text-center">Lokasi Kami</h3>
      <div class="ratio ratio-16x9 shadow rounded">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.68391522447!2d112.73312197482467!3d-7.315428871930579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb5a104cae0b%3A0x134b020dd584cdcf!2sMASPION%20SQUARE!5e0!3m2!1sen!2sus!4v1755058000737!5m2!1sen!2sus"
          style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>

    <!-- Kanan: Teks Penawaran Tengah -->
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
      <h3 class="text-success mb-3">Penawaran Spesial</h3>
      <p>
        Mau teknologi yang bikin bisnis kamu lebih mudah dan cepat?  
        Kami siap bantu dengan solusi IT yang sesuai kebutuhanmu, dari perangkat, software, hingga konsultasi profesional.  
        Yuk, hubungi kami dan dapatkan penawaran eksklusif sekarang!
      </p>
      <ul class="list-unstyled">
        <li>✅ Solusi IT custom, pas banget buat bisnis kamu</li>
        <li>✅ Support ramah 24/7</li>
        <li>✅ Harga bersaing, tapi kualitas nomor satu</li>
      </ul>
    </div>
  </div>
</section>

@endsection