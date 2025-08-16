<?php include './header.php'; ?>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Hero Section with Video Slider -->
<div class="section-hero-a" style="width: 100%; height: 97vh;">
    <div class="swiper videoSwiper" style="width: 100%; height: 100%;">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
                    <source src="https://www.shutterstock.com/shutterstock/videos/3705121179/preview/stock-footage-robotic-arms-automate-circuit-board-assembly-inside-a-smart-iot-factory-factory-floor-with.webm" type="video/mp4">
                </video>
            </div>

            <!-- Slide 2 -->
            <!-- <div class="swiper-slide">
                <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
                    <source src="https://www.shutterstock.com/shutterstock/videos/1096287725/preview/stock-footage-lorem-ipsum-underwater-placeholder-clip.webm" type="video/webm">
                </video>
            </div> -->

            <!-- Slide 3 -->
            <!-- <div class="swiper-slide">
                <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
                    <source src="https://www.shutterstock.com/shutterstock/videos/3637846551/preview/stock-footage-technician-activates-smart-factory-floor-advanced-manufacturing-visualization-of-data-analysis-ai.webm" type="video/webm">
                </video>
            </div> -->

        </div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
    const swiper = new Swiper('.videoSwiper', {
        loop: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

<!-- Optional: Style the dots -->
<style>
    .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }
</style>

 <!-- ENGINEERING PRODUCTS SECTION -->
 <div class="section background" style="padding: 60px 20px;">
    <h2 class="heading" style="text-align: center;">Engineering Products – (PLUMBLINE)</h2> 
  <div class="content">
    <div class="subtitle" style="text-align: center;">
      <div class="" style="margin: 0 auto;"></div>
      <div class="text-subtitle">Our Range</div>
    </div>

    <div class="w-layout-grid grid-2-columns" style="gap: 40px; margin-top: 40px;">

      <!-- PRODUCT 1 -->
      <div class="product-card" style="text-align: center;">
        <img src="./images/1.jpg" alt="Industrial Valve" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Industrial Valve</h4>
        <p>Reliable flow control solutions for oil, gas, water, and industrial applications.</p>
      </div>

      <!-- PRODUCT 2 -->
      <div class="product-card" style="text-align: center;">
        <img src="./images/2.jpg" alt="Flanges" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Flanges</h4>
        <p>Durable and precision-engineered flanges for seamless pipe connectivity.</p>
      </div>

      <!-- PRODUCT 3 -->
      <div class="product-card" style="text-align: center;">
        <img src="./images/3.jpg" alt="Fittings" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Fittings</h4>
        <p>Wide range of pipe fittings to meet various industrial and construction needs.</p>
      </div>

      <!-- PRODUCT 4 -->
      <div class="product-card" style="text-align: center;">
        <img src="./images/4.jpg" alt="Bolts and Nuts" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Bolts and Nuts</h4>
        <p>High-strength fasteners engineered for structural reliability and endurance.</p>
      </div>

    </div>
  </div>
</div>


<?php include './footer.php';  ?>