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
<!-- AGRO PRODUCTS SECTION -->
<div class="section background" style="padding: 60px 20px;">
  <h2 class="heading" style="text-align: center;">Agro Products – (BROWN BEANS)</h2>
  <div class="content">
    <div class="subtitle" style="text-align: center;">
      <div style="margin: 0 auto;"></div>
      <div class="text-subtitle">Our Range</div>
    </div>

    <div class="w-layout-grid grid-2-columns" style="gap: 40px; margin-top: 40px;">

      <!-- PRODUCT 1 -->
      <div class="product-card" style="text-align: center;">
        <img src="https://picsum.photos/id/1050/600/400" alt="Coffee Beans" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Coffee Beans</h4>
        <p>Premium hand-picked coffee beans known for rich aroma and flavor.</p>
      </div>

      <!-- PRODUCT 2 -->
      <div class="product-card" style="text-align: center;">
        <img src="https://picsum.photos/id/1051/600/400" alt="Coffee Powder" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Coffee Powder</h4>
        <p>Finely ground coffee powder ideal for filter, espresso, and instant use.</p>
      </div>

      <!-- PRODUCT 3 -->
      <div class="product-card" style="text-align: center;">
        <img src="https://picsum.photos/id/1052/600/400" alt="Cocoa Beans" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Cocoa Beans</h4>
        <p>High-grade cocoa beans for chocolate production and confectionery.</p>
      </div>

      <!-- PRODUCT 4 -->
      <div class="product-card" style="text-align: center;">
        <img src="https://picsum.photos/id/1053/600/400" alt="Cocoa Powder" style="width: 100%; border-radius: 12px; margin-bottom: 15px;">
        <h4 style="margin-bottom: 10px;">Cocoa Powder</h4>
        <p>Rich and aromatic cocoa powder used in baking, beverages, and desserts.</p>
      </div>

    </div>
  </div>
</div>

<?php include './footer.php';  ?>