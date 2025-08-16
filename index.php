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
            <div class="swiper-slide">
                <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
                    <source src="https://www.shutterstock.com/shutterstock/videos/1096287725/preview/stock-footage-lorem-ipsum-underwater-placeholder-clip.webm" type="video/webm">
                </video>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
                    <source src="https://www.shutterstock.com/shutterstock/videos/3637846551/preview/stock-footage-technician-activates-smart-factory-floor-advanced-manufacturing-visualization-of-data-analysis-ai.webm" type="video/webm">
                </video>
            </div>

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

<!-- Product Tabs Section -->
<div class="section background" >
  <div class="content" style="max-width: 1000px; margin: auto;">
    <h2 style="text-align: center; margin-bottom: 30px;">Our Products</h2>

    <!-- Tabs Navigation -->
    <div class="tabs-nav" style="display: flex; justify-content: center; gap: 20px; margin-bottom: 30px;">
      <button class="tab-btn active" onclick="showTab('engineering')">Engineering Products</button>
      <button class="tab-btn" onclick="showTab('construction')">Construction Products</button>
      <button class="tab-btn" onclick="showTab('agro')">Agro Products</button>
    </div>

    <!-- Tabs Content -->
    <div class="tabs-content">

      <!-- Engineering Products -->
      <div id="engineering" class="tab-panel active">
        <div class="product-row">
          <div class="product-img">
            <img src="data:image/jpeg;base64,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" alt="Engineering Product" />
          </div>
          <div class="product-info">
            <h3>Engineering Products (PLUMBLINE)</h3>
            <p>We offer high-quality engineering materials including Plumbline, Industrial Valves, Flanges, Fittings, Bolts, and Nuts. Built for precision, reliability, and long-lasting performance in industrial applications.</p>
            <a href="#" class="btn-know-more">Know More</a>
          </div>
        </div>

        <!-- Certificates -->
        <div class="certificates">
          <h4>Certificates</h4>
          <div class="cert-grid">
            <img src="https://picsum.photos/seed/eng-cert1/200/150" alt="Certificate" />
            <img src="https://picsum.photos/seed/eng-cert2/200/150" alt="Certificate" />
            <img src="https://picsum.photos/seed/eng-cert3/200/150" alt="Certificate" />
          </div>
        </div>
      </div>

      <!-- Construction Products -->
      <div id="construction" class="tab-panel" style="display:none;">
        <div class="product-row">
          <div class="product-img">
            <img src="https://picsum.photos/seed/construction/500/300" alt="Construction Product" />
          </div>
          <div class="product-info">
            <h3>Construction Products (BULDX)</h3>
            <p>Supplying top-grade construction materials including Marble, Ceramic Tiles, Plywood, ACC Blocks, Steel Rods, and TMT Bars. Perfect for residential, commercial, and industrial infrastructure.</p>
            <a href="#" class="btn-know-more">Know More</a>
          </div>
        </div>

        <!-- Certificates -->
        <div class="certificates">
          <h4>Certificates</h4>
          <div class="cert-grid">
            <img src="https://picsum.photos/seed/const-cert1/200/150" alt="Certificate" />
            <img src="https://picsum.photos/seed/const-cert2/200/150" alt="Certificate" />
            <img src="https://picsum.photos/seed/const-cert3/200/150" alt="Certificate" />
          </div>
        </div>
      </div>

      <!-- Agro Products -->
      <div id="agro" class="tab-panel" style="display:none;">
        <div class="product-row">
          <div class="product-img">
            <img src="https://picsum.photos/seed/agro/500/300" alt="Agro Product" />
          </div>
          <div class="product-info">
            <h3>Agro Products (BROWN BEANS)</h3>
            <p>We export premium-grade Agro products such as Brown Beans, Coffee Beans & Powder, and Cocoa Beans & Powder. Grown organically and processed for maximum freshness and flavor.</p>
            <a href="#" class="btn-know-more">Know More</a>
          </div>
        </div>

        <!-- Certificates -->
        <div class="certificates">
          <h4>Certificates</h4>
          <div class="cert-grid">
            <img src="https://picsum.photos/seed/agro-cert1/200/150" alt="Certificate" />
            <img src="https://picsum.photos/seed/agro-cert2/200/150" alt="Certificate" />
            <img src="https://picsum.photos/seed/agro-cert3/200/150" alt="Certificate" />
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Tab Script -->
<script>
  function showTab(tabId) {
    document.querySelectorAll('.tab-panel').forEach(panel => panel.style.display = 'none');
    document.getElementById(tabId).style.display = 'block';
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
  }
</script>

 <style>
  .tab-btn {
    padding: 10px 20px;
    border: none;
    background: #eee;
    cursor: pointer;
    font-weight: bold;
    border-radius: 4px;
    transition: background 0.3s;
    flex: 1;
    text-align: center;
  }

  .tab-btn.active {
    background: #007BFF;
    color: #fff;
  }

  .tabs-nav {
    flex-wrap: wrap;
  }

  .tab-panel {
    display: none;
  }

  .tab-panel.active {
    display: block;
  }

  .product-row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    align-items: flex-start;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }

  .product-img {
    flex: 1 1 300px;
  }

  .product-img img {
    width: 100%;
    max-width: 100%;
    border-radius: 8px;
    display: block;
  }

  .product-info {
    flex: 1 1 300px;
  }

  .product-info h3 {
    margin-top: 0;
    font-size: 1.5rem;
  }

  .product-info p {
    font-size: 1rem;
    line-height: 1.5;
    color: #333;
  }

  .btn-know-more {
    display: inline-block;
    margin-top: 15px;
    background-color: #007BFF;
    color: #fff;
    padding: 10px 18px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
  }

  .btn-know-more:hover {
    background-color: #0056b3;
  }

  .certificates {
    margin-top: 30px;
    text-align: center;
  }

  .certificates h4 {
    margin-bottom: 15px;
    font-size: 1.3rem;
  }

  .cert-grid {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
  }

  .cert-grid img {
    border-radius: 6px;
    border: 1px solid #ccc;
    width: 200px;
    height: 150px;
    object-fit: cover;
  }

  /* RESPONSIVE STYLES */
  @media (max-width: 992px) {
    .product-row {
      flex-direction: column;
    }

    .tabs-nav {
      flex-direction: column;
      gap: 10px;
    }

    .tab-btn {
      width: 100%;
    }
  }

  @media (max-width: 600px) {
    .product-info h3 {
      font-size: 1.3rem;
    }

    .product-info p {
      font-size: 0.95rem;
    }

    .cert-grid img {
      width: 100%;
      max-width: 250px;
      height: auto;
    }
  }
</style>

<div class="section background">
    <div class="content">
        <div class="w-layout-grid grid-2-columns">
            <!-- STATS SECTION -->
            <div data-w-id="02815509-de40-52d7-d214-3356765b1fa7" style="opacity:0" class="w-layout-grid grid-stats">

                <div class="stats">
                    <div class="icon-stats-block">
                        <i class="fa fa-industry" style="font-size:36px; color:#005bea;"></i>
                    </div>
                    <div class="stats-block">
                        <div class="numbers-stats">10+</div>
                        <h6 class="heading-stats">Years of Export Experience</h6>
                    </div>
                </div>

                <div class="stats">
                    <div class="icon-stats-block">
                        <i class="fa fa-globe" style="font-size:36px; color:#005bea;"></i>
                    </div>
                    <div class="stats-block">
                        <div class="numbers-stats">20+</div>
                        <h6 class="heading-stats">Countries Served Worldwide</h6>
                    </div>
                </div>

                <div class="stats">
                    <div class="icon-stats-block">
                        <i class="fa fa-boxes-stacked" style="font-size:36px; color:#005bea;"></i>
                    </div>
                    <div class="stats-block">
                        <div class="numbers-stats">50+</div>
                        <h6 class="heading-stats">Product Variants Across Industries</h6>
                    </div>
                </div>

                <div class="stats">
                    <div class="icon-stats-block">
                        <i class="fa fa-handshake" style="font-size:36px; color:#005bea;"></i>
                    </div>
                    <div class="stats-block">
                        <div class="numbers-stats">100%</div>
                        <h6 class="heading-stats">Commitment to Trust & Transparency</h6>
                    </div>
                </div>

            </div>

            <!-- ABOUT US SECTION -->
            <div id="aboutus" data-w-id="7d084945-bd36-afb6-ad37-cc7d7d18f746" style="opacity:0" class="block-right">
                <div class="subtitle">
                    <div class="line-subtitle"></div>
                    <div class="text-subtitle">We Are Sainath Venture</div>
                </div>
                <h2 class="heading">Focused on Trust, Built for Growth</h2>
                <p class="paragraph">
                    Sainath Venture is a multi-sector export company driven by strong values, strategic execution, and long-term partnerships.
                    We deliver high-quality engineering, construction, and agro products under trusted brands like Plumbline, BuldX, and Brown Beans.
                    <br><br>
                    Our operations are backed by disciplined work culture, global trade compliance, and a commitment to mutual success.
                </p>
                <a href="about.html" class="button w-inline-block">
                    <div class="text-button white">ABOUT US</div>
                    <i class="fa fa-arrow-right icon-button" style="margin-left: 8px;"></i>
                </a>
            </div>
        </div>
    </div>
</div>



<!-- SECTION CONTAINER -->
<div class="section" style="position: relative; overflow: hidden;">
  <div class="content">
    <div class="w-layout-grid grid-2-columns">

      <!-- LEFT TEXT BLOCK -->
      <div class="block-left" style="opacity: 1;">
        <div class="subtitle">
          <div class="line-subtitle"></div>
          <div class="text-subtitle">why choose us</div>
        </div>
        <h2 class="heading">We Deliver Confidence, Not Just Products.</h2>
        <p class="paragraph">
          At Sainath Venture, we operate with discipline, communicate with clarity, and deliver exactly what we promise — on time, every time.
          <br><br>
          Our partners trust us because we:
          <ul>
            <li>✔️ Value long-term relationships over one-time deals</li>
            <li>✔️ Ensure transparent and ethical business practices</li>
            <li>✔️ Offer reliable supply chains across industries</li>
            <li>✔️ Provide consistent quality and timely delivery</li>
          </ul>
          Whether it's engineering, construction, or agro products — our mission is simple: deliver growth through trust.
        </p>
      </div>
 
      <div class="image-block" style="
          position: -webkit-sticky;
          position: sticky;
          top: 100px;
          align-self: start;
          height: fit-content;
        ">
        <img class="image"
             src="images/202005570_442005150320733_3219036172197603491_n.jpg"
             alt=""
             style="width: 90%; max-width: 400px; margin-bottom: 20px; opacity: 1;"
             loading="lazy" />

        <img class="image-absolute"
             src="images/242394460_3000404886885237_2158669503101078344_n.jpg"
             alt=""
             style="width: 90%; max-width: 400px; opacity: 1;"
             loading="lazy" />
      </div>

    </div>
  </div>
</div>

<!-- <div class="section-full">
    <div class="w-layout-grid grid-full">
        <div data-w-id="37f1ba29-7f4f-ccfc-1873-1fbb198082d0" style="opacity:0" class="image-bg-services"></div>
        <div class="block-full">
            <div data-w-id="bc87704f-579f-0712-5432-b89a1b88c149" style="opacity:0" class="block">
                <div class="subtitle">
                    <div class="line-subtitle white"></div>
                    <div class="text-subtitle white">proving peace-of-mind</div>
                </div>
                <h2 class="heading white">Fully Certified</h2>
                <p class="paragraph white">We understand that with experience, also come validation. We are proud to
                    announce that at C&amp;C we have the following certifications:<br /><span
                        class="subtext-red"><em class="topspacing smalltext">• Texas Minority Certification<br />•
                            Texas Hub Certification<br />• A.C.I. Certified Finishers<br />• A.C.P.A. Certified
                            Operators</em></span><br /></p><a href="#services"
                    data-w-id="6074bd2f-fd99-92bd-5b40-b266ce75301f" class="button w-inline-block">
                    <div class="text-button white">Our Services</div><img src="images/icon_button_white.svg"
                        loading="lazy" alt="" class="icon-button" />
                </a>
            </div>
        </div>
    </div>
</div> -->
<div class="section-full">
  <div class="w-layout-grid grid-3-columns-full">
    
    <!-- Image 1 -->
    <img class="image-gallery"
         src="https://picsum.photos/id/640/640"
         alt="Gallery Image 1"
         style="opacity: 1;"
         loading="lazy" />

    <!-- Image 2 -->
    <img class="image-gallery"
         src="https://picsum.photos/id/640/640"
         alt="Gallery Image 2"
         style="opacity: 1;"
         loading="lazy" />

    <!-- Image 3 -->
    <img class="image-gallery"
         src="https://picsum.photos/id/640/640"
         alt="Gallery Image 3"
         style="opacity: 1;"
         loading="lazy" />

  </div>
</div>
<!-- 
<div class="section">
    <div class="content">
        <div data-w-id="7fdcc5fd-ac6b-37c9-4256-2886113876b1" style="opacity:0" class="block-heading">
            <div id="services" class="block-heading-text">
                <div class="subtitle">
                    <div class="line-subtitle"></div>
                    <div class="text-subtitle">Our SERVICES</div>
                </div>
                <h2 class="heading">Specializing in Concrete and Construction Projects</h2>
            </div>
        </div>
        <div class="w-layout-grid grid-4-columns">
            <div data-w-id="985cf685-a15d-b99e-66d1-e5a9841e8844" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-201.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">Concrete Pumping </h5>
                <p class="paragraph-expertise smallertext">Save your back the trouble. Reaching over, under, and far
                    away from the trucks to pour concrete quickly and accurately.</p>
            </div>
            <div data-w-id="514d4c3d-5e50-6beb-e8a7-5b6bed829393" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-202.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">Concrete Finishing</h5>
                <p class="paragraph-expertise smallertext">Timing is crucial with finishing and we pay close
                    attention to the condition of the concrete to avoid improper finishing techniques that can lead
                    to a weak or unattractive slab.</p>
            </div>
            <div data-w-id="4e6428fa-21e9-b969-0112-6f03c423b890" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-203.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">Concrete Polishing</h5>
                <p class="paragraph-expertise smallertext">Our multi-step process transforms old, worn concrete
                    surfaces into attractive floors. Mechanically ground, honed and polished with bonded abrasives
                    to be finally refined.</p>
            </div>
            <div data-w-id="c950cd08-4692-c72c-7644-0efba548a27f" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-204.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">Concrete Repairs</h5>
                <p class="paragraph-expertise smallertext">Fixing hardened concrete surface that, over time, has
                    lost its ability to hold the binding materials together. We are here to fix cracks,physical
                    impacts, and surface scaling.</p>
            </div>
        </div>
        <div class="w-layout-grid grid-4-columns topgap">
            <div data-w-id="3a772577-61d9-366f-ef94-503148a1bd70" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-206.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">High Rise Placing Boom and Finishing</h5>
                <p class="paragraph-expertise smallertext">Conventional truck-mounted pumps cannot place concrete
                    directly from the pump line’s hose above the fourth floor. Placing booms overcome that problem!
                </p>
            </div>
            <div data-w-id="3a772577-61d9-366f-ef94-503148a1bd77" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-207.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">Specialized Concrete Pours</h5>
                <p class="paragraph-expertise smallertext">We consider size, shape, color, finish and the complexity
                    of every project when pouring our concrete. Handling each project in detail for that perfect
                    finish.</p>
            </div>
            <div data-w-id="3a772577-61d9-366f-ef94-503148a1bd7e" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-208.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">Art Deco Driveway and Patio</h5>
                <p class="paragraph-expertise smallertext">Functional and stylish. This frequently used space will
                    be exposed to tyre marks, oil spills and general wear. But we can give you the 30’s feel to last
                    a lifetime</p>
            </div>
            <div data-w-id="3a772577-61d9-366f-ef94-503148a1bd85" style="opacity:0" class="expertise">
                <div class="icon-expertise-block"><img src="images/asset-209.svg" loading="lazy" alt=""
                        class="icon icons2" /></div>
                <h5 class="heading-expertise">&amp; Many More Services</h5>
                <p class="paragraph-expertise smallertext">Paving, coping, walls and more. When you are ready to
                    start your project we are ready to receive your call.</p>
            </div>
        </div>
    </div>
</div> -->
<!-- <div class="section background">
    <div class="content">
        <div data-w-id="b07cbdc8-4598-b1de-280d-aa88ec630507" style="opacity:0" class="block-heading">
            <div id="projects" class="block-heading-text">
                <div class="subtitle">
                    <div class="line-subtitle"></div>
                    <div class="text-subtitle">featured Projects</div>
                </div>
                <h2 class="heading">Building Structures <br />That Set Us Apart</h2>
            </div>
            <div class="block-heading-button"><a data-w-id="66623e46-d2df-fb6f-2f34-26765db85ceb"
                    href="projects.html" class="button hide w-inline-block">
                    <div class="text-button white">All Projects</div><img src="images/icon_button_white.svg"
                        loading="lazy" alt="" class="icon-button" />
                </a></div>
        </div>
        <div data-w-id="d568efb4-751f-37c5-bcc4-e573a1aac5a7" style="opacity:0"
            class="collection-list-wrapper-project w-dyn-list">
            <div role="list" class="collection-list-project w-dyn-items">
                <div role="listitem" class="collection-item-project w-dyn-item"><a href="project/the-muse.html"
                        class="link-image-project w-inline-block"><img src="images/fgdfbvs.jpg" loading="lazy"
                            alt="THE MUSE"
                            sizes="(max-width: 479px) 79vw, (max-width: 767px) 83vw, (max-width: 991px) 28vw, 31vw"
                            srcset="images/fgdfbvs-p-500.jpeg 500w, images/fgdfbvs-p-800.jpeg 800w, images/fgdfbvs.jpg 1000w"
                            class="image-project" /></a>
                    <div class="text-project-type">Current Project</div><a
                        data-w-id="c62ff87d-339a-a955-1653-ac089c924764" href="#"
                        class="link-block-project w-inline-block">
                        <div class="block-project">
                            <h5 class="heading-project">THE MUSE</h5>
                            <div class="icon-arrow"><img src="images/arrow_4.svg" loading="lazy"
                                    style="-webkit-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="" class="icon-arrow-a" /><img src="images/arrow_3.svg" loading="lazy"
                                    style="-webkit-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="" class="icon-arrow-b" /></div>
                        </div>
                        <div class="line-block">
                            <div class="line-full dark"></div>
                            <div class="line-1px dark"></div>
                        </div>
                    </a>
                </div>
                <div role="listitem" class="collection-item-project w-dyn-item"><a
                        href="project/porsche-design.html" class="link-image-project w-inline-block"><img
                            src="images/p1200581.jpg" loading="lazy" alt="PORSCHE DESIGN"
                            sizes="(max-width: 479px) 79vw, (max-width: 767px) 83vw, (max-width: 991px) 28vw, 31vw"
                            srcset="images/p1200581-p-500.jpeg 500w, images/p1200581-p-800.jpeg 800w, images/p1200581.jpg 1280w"
                            class="image-project" /></a>
                    <div class="text-project-type">Current Project</div><a
                        data-w-id="c62ff87d-339a-a955-1653-ac089c924764" href="#"
                        class="link-block-project w-inline-block">
                        <div class="block-project">
                            <h5 class="heading-project">PORSCHE DESIGN</h5>
                            <div class="icon-arrow"><img src="images/arrow_4.svg" loading="lazy"
                                    style="-webkit-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="" class="icon-arrow-a" /><img src="images/arrow_3.svg" loading="lazy"
                                    style="-webkit-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="" class="icon-arrow-b" /></div>
                        </div>
                        <div class="line-block">
                            <div class="line-full dark"></div>
                            <div class="line-1px dark"></div>
                        </div>
                    </a>
                </div>
                <div role="listitem" class="collection-item-project w-dyn-item"><a href="project/sls-tower.html"
                        class="link-image-project w-inline-block"><img src="images/p1200686.jpg" loading="lazy"
                            alt="SLS TOWER"
                            sizes="(max-width: 479px) 79vw, (max-width: 767px) 83vw, (max-width: 991px) 28vw, 31vw"
                            srcset="images/p1200686-p-500.jpeg 500w, images/p1200686-p-800.jpeg 800w, images/p1200686.jpg 1280w"
                            class="image-project" /></a>
                    <div class="text-project-type">Current Project</div><a
                        data-w-id="c62ff87d-339a-a955-1653-ac089c924764" href="#"
                        class="link-block-project w-inline-block">
                        <div class="block-project">
                            <h5 class="heading-project">SLS TOWER</h5>
                            <div class="icon-arrow"><img src="images/arrow_4.svg" loading="lazy"
                                    style="-webkit-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(120%, -120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="" class="icon-arrow-a" /><img src="images/arrow_3.svg" loading="lazy"
                                    style="-webkit-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="" class="icon-arrow-b" /></div>
                        </div>
                        <div class="line-block">
                            <div class="line-full dark"></div>
                            <div class="line-1px dark"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="section-full">
    <div class="w-layout-grid grid-full">
        <!-- Optional Background -->
        <div data-w-id="f3d7b1f9-8998-2f5c-c071-026871c6b20b" style="opacity:0" class="image-bg-testimonials"></div>

        <!-- WHY US Content Block -->
        <div class="block-full">
            <div data-w-id="f3d7b1f9-8998-2f5c-c071-026871c6b20d" style="opacity:0" class="block">
                <div class="subtitle">
                    <div class="line-subtitle white"></div>
                    <div class="text-subtitle white">WHY US?</div>
                </div>
                <h2 class="heading white">We Deliver Confidence, Not Just Products.</h2>
                <p class="paragraph-testimonials">
                    At Sainath Venture, we focus on trust, transparency, and long-term value.<br><br>
                    Our partners choose us because we operate with discipline, communicate clearly, and deliver exactly what we promise — on time, every time.<br><br>
                    We don’t believe in one-time transactions. We build reliable, consistent partnerships designed for growth and mutual success.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-full">
    <div class="w-layout-grid grid-2-columns-full">
        <div data-w-id="4b6d3c95-e41b-e9c8-ae54-c09469d55e5f" class="image-bg-banner"></div>
        <div data-w-id="4b6d3c95-e41b-e9c8-ae54-c09469d55e60" class="block-banner">
            <div class="block">
                <div class="subtitle">
                    <div class="line-subtitle white"></div>
                    <div class="text-subtitle white">Contact Us</div>
                </div>
                <h3 class="heading-banner whitetext">Ready to work together?</h3><a
                    data-w-id="4b6d3c95-e41b-e9c8-ae54-c09469d55e68" href="contact.html"
                    class="button accent w-inline-block">
                    <div class="text-button">contact us</div><img src="images/icon_button.svg" loading="lazy" alt=""
                        class="icon-button" />
                </a>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php';  ?>