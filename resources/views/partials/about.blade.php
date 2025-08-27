@extends('layout')
@section('content')
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Tentang Kami</h1>
                    <p>Zetoro Janaloka Teknologi menyediakan solusi teknologi lengkap - mulai dari pengadaan perangkat,
                        penyewaan, perawatan, hingga sistem digital yang disesuaikan.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                <img src="assets/img/about-hero.jpg" alt="About Hero" class="about-img img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1>Kenapa Kami?</h1>
                <p>
                    Kami memberikan solusi TI terbaik dan terpercaya untuk kebutuhan bisnis Anda.
                </p>
            </div>
        </div>
        <div class="row">
       <div class="row g-4">

      <!-- Item 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow border-0 text-center p-4 feature-box">
          <div class="icon-circle mx-auto mb-3">
            <i class="fas fa-user-tie"></i>
          </div>
          <h5 class="fw-bold">01. Pengalaman Profesional</h5>
          <p class="text-muted">Tim kami terdiri dari tenaga ahli berpengalaman di berbagai bidang teknologi informasi.</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow border-0 text-center p-4 feature-box">
          <div class="icon-circle mx-auto mb-3">
            <i class="fas fa-cogs"></i>
          </div>
          <h5 class="fw-bold">02. Layanan Lengkap</h5>
          <p class="text-muted">Mulai dari pengadaan perangkat, instalasi, hingga perawatan dan konsultasi TI.</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow border-0 text-center p-4 feature-box">
          <div class="icon-circle mx-auto mb-3">
            <i class="fas fa-tags"></i>
          </div>
          <h5 class="fw-bold">03. Harga Kompetitif</h5>
          <p class="text-muted">Kami menawarkan solusi terbaik dengan harga yang sesuai anggaran perusahaan Anda.</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow border-0 text-center p-4 feature-box">
          <div class="icon-circle mx-auto mb-3">
            <i class="fas fa-microchip"></i>
          </div>
          <h5 class="fw-bold">04. Teknologi Terkini</h5>
          <p class="text-muted">Kami selalu mengikuti perkembangan teknologi untuk memberikan hasil maksimal.</p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow border-0 text-center p-4 feature-box">
          <div class="icon-circle mx-auto mb-3">
            <i class="fas fa-bolt"></i>
          </div>
          <h5 class="fw-bold">05. Respons Cepat</h5>
          <p class="text-muted">Tim support kami siap membantu Anda dengan respon yang cepat dan efisien.</p>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow border-0 text-center p-4 feature-box">
          <div class="icon-circle mx-auto mb-3">
            <i class="fas fa-smile"></i>
          </div>
          <h5 class="fw-bold">06. Kepuasan Klien</h5>
          <p class="text-muted">Fokus utama kami adalah kepuasan dan kepercayaan dari klien.</p>
        </div>
      </div>

    </div>
  </div>
</section>
    <!-- End Section -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!-- Carousel Wrapper -->
                        <div class="col">
                        <div id="templatemo-slide-brand" class="carousel slide carousel-multi-item pt-2 pt-md-0" data-bs-ride="carousel">

                            <!-- Slides -->
                            <div class="carousel-inner product-links-wap" role="listbox">

                            <!-- First slide -->
                            <div class="carousel-item active">
                                <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-1.png" class="img-fluid brand-img" alt="Client 1"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-2.png" class="img-fluid brand-img" alt="Client 2"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-3.png" class="img-fluid brand-img" alt="Client 3"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-4.png" class="img-fluid brand-img" alt="Client 4"></a>
                                </div>
                                </div>
                            </div>
                            <!-- End First slide -->

                            <!-- Second slide -->
                            <div class="carousel-item">
                                <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-5.png" class="img-fluid brand-img" alt="Client 5"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-6.png" class="img-fluid brand-img" alt="Client 6"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-7.png" class="img-fluid brand-img" alt="Client 7"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-8.png" class="img-fluid brand-img" alt="Client 8"></a>
                                </div>
                                </div>
                            </div>
                            <!-- End Second slide -->

                            <!-- Third slide -->
                            <div class="carousel-item">
                                <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-9.png" class="img-fluid brand-img" alt="Client 9"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-10.png" class="img-fluid brand-img" alt="Client 10"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-11.png" class="img-fluid brand-img" alt="Client 11"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-12.png" class="img-fluid brand-img" alt="Client 12"></a>
                                </div>
                                </div>
                            </div>
                            <!-- End Third slide -->

                            <!-- Fourth slide -->
                            <div class="carousel-item">
                                <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-13.png" class="img-fluid brand-img" alt="Client 13"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-14.png" class="img-fluid brand-img" alt="Client 14"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-15.png" class="img-fluid brand-img" alt="Client 15"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-16.png" class="img-fluid brand-img" alt="Client 16"></a>
                                </div>
                                </div>
                            </div>
                            <!-- End Fourth slide -->

                            <!-- Fifth slide -->
                            <div class="carousel-item">
                                <div class="row">
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-17.png" class="img-fluid brand-img" alt="Client 17"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-18.png" class="img-fluid brand-img" alt="Client 18"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-19.png" class="img-fluid brand-img" alt="Client 19"></a>
                                </div>
                                <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-20.png" class="img-fluid brand-img" alt="Client 20"></a>
                                </div>
                                </div>
                            </div>
                            <!-- End Fifth slide -->

                            <!-- Sixth slide -->
                                <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-21.png" class="img-fluid brand-img" alt="Client 21"></a>
                                    </div>
                                    <div class="col-3 p-md-5">
                                    <a href="#"><img src="assets/img/clients/client-22.png" class="img-fluid brand-img" alt="Client 22"></a>
                                    </div>
                                </div>
                                </div>
                            <!-- End Sixth slide -->

                            </div>
                            <!-- End Slides -->

                        </div>
                        </div>
                        <!-- End Carousel Wrapper -->


                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
    <!-- CSS tambahan -->
<style>
    .about-img {
  max-width: auto;
  width: auto;
  height: auto;
  border-radius: auto;
}
.feature-box {
    transition: all 0.3s ease;
    border-radius: 15px;
  }
  .feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0px 10px 20px rgba(0,0,0,0.1);
  }
  .icon-circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #198754;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
  }
</style>
    @endsection
