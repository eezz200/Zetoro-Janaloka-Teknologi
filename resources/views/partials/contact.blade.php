@extends('layout')
@section('content')
<!-- Maps + Teks Penawaran Tengah -->
<section class="container my-5">
  <div class="row align-items-center">
    <!-- Kiri: Maps -->
    <div class="col-md-6 mb-4 mb-md-0">
      <h3 class="text-success mb-3 text-center">Lokasi Kami</h3>
      <div class="ratio ratio-16x9 shadow rounded">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.894145245862!2d106.82715231476928!3d-6.200000995510166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f6abef8f1d%3A0x123456789abcdef!2sMonas!5e0!3m2!1sid!2sid!4v1691234567890"
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