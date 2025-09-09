<!-- Start Portfolio of The Month -->
<section id="portfolio" class="portfolio section py-5">
  <div class="container">
    <!-- Start Portfolio Carousel -->
    <div class="text-center mb-4">
      <h2 class="fw-bold">Portfolio</h2>
      <hr class="mx-auto mt-3" style="width: 60px; border-top: 3px solid #28a745;">
      <p class="text-muted">Beberapa karya pilihan kami dalam desain, branding, dan lainnya.</p>
    </div>

<div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-bs-target="#portfolioCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#portfolioCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#portfolioCarousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#portfolioCarousel" data-bs-slide-to="3"></li>
        <li data-bs-target="#portfolioCarousel" data-bs-slide-to="4"></li>
      </ol>

      <!-- Carousel Items -->
      <div class="carousel-inner">

        <!-- Item 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
              <img src="assets/img/portfolio/pft1.png" class="img-fluid rounded shadow-sm" alt="Desain 1">
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
              <img src="assets/img/masonry-portfolio/pf1.png" class="img-fluid rounded shadow-sm" alt="Branding 1">
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
              <img src="assets/img/masonry-portfolio/pf3.png" class="img-fluid rounded shadow-sm" alt="Branding 2">
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="carousel-item">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
              <img src="assets/img/portfolio/pft2.png" class="img-fluid rounded shadow-sm" alt="Desain 2">
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="carousel-item">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
              <img src="assets/img/portfolio/pft4.png" class="img-fluid rounded shadow-sm" alt="Desain 3">
            </div>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <a class="carousel-control-prev" href="#portfolioCarousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left text-success fs-3"></i>
      </a>
      <a class="carousel-control-next" href="#portfolioCarousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right text-success fs-3"></i>
      </a>
    </div>
  </div>
</section>
<!-- End Portfolio Carousel -->

<!-- Custom CSS -->
<style>
  #portfolioCarousel .carousel-item {
    padding: 30px 0;
  }
  #portfolioCarousel img {
    max-height: 400px; /* batasi tinggi gambar */
    object-fit: contain;
    margin: 0 auto;
    display: block;
  }
</style>
