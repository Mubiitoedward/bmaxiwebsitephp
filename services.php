<?php
    include('includes/navbar.php')
    ?>

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bgnew.png);">
      <div class="container position-relative">
        <h1>Services</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>We offer a comprehensive range of services designed to elevate your brand and business. </p>
          </div><!-- End Section Title -->
    
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="bi bi-brush-fill"></i>
                  </div>
                  <h3>Designing</h3>
                  <p>Our expert designers transform ideas into impactful visuals, crafting everything from logos and marketing materials to digital content and packaging. With a keen eye for detail and a passion for creativity, 
                    we create designs that resonate with your audience and leave a lasting impression.</p>
                  <a href="servicedetails.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
    
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="bi bi-printer-fill"></i>
                  </div>
                  <h3>Printing</h3>
                  <p>The printing sector includes establishments 
                    primarily engaged in printing text and images 
                    on to paper, metal, glass, apparel and other 
                    materials and our sole aim is to be a one stop 
                    center for all these printing needs in the best 
                    quality; because we are indeed the best in the 
                    game </p>
                  <a href="servicedetails.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
    
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-compass-drafting"></i>
                  </div>
                  <h3>Branding</h3>
                  <p>Our branding services are designed to craft a strong, cohesive brand that tells your unique story. From logo design and brand messaging to creating a consistent visual identity across all platforms, we work closely with you to develop a brand that resonates with your target audience.</p>
                  <a href="servicedetails.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
    

    <!-- Alt Services 2 Section -->
    <section id="alt-services-2" class="alt-services-2 section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h3>About Our Services And Products</h3>
            <p> We 
              endeavor to produce high quality products 
              right from idea generation through brain storming, concept development; through sketching, designing, printing, 
              packaging and finally delivery. </p>
              <br>
              <p>That is what has kept us on top of the game. The principal business of the company 
                is mainly: Designing, printing, branding and publishing materials like brochure 
                books, magazines, Journals, Annual reports, roll ups and teardrops, corporate 
                branding, branding ideas and solutions among others.   </p>
           
          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/capes.jpeg" alt="">
          </div>

        </div>

      </div>

    </section><!-- /Alt Services 2 Section -->

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>What Our Clients Say</h2>
          <p>Whether it’s for corporate events, promotional campaigns, or special gifts, our clients trust us to deliver exceptional products that make a lasting impression.</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/team1.png" class="testimonial-img" alt="">
                    <h3>Shina Nalugga</h3>
                    <h4>Ceo &amp; Spare Comp Ltd</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The gift packs were fantastic! The thoughtful curation of items and the beautiful packaging made them perfect for our executive gifts. 
                        Our partners were delighted, and it enhanced our brand's image significantly.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/team4.jpg" class="testimonial-img" alt="">
                    <h3>Ssempebwa Wilsson</h3>
                    <h4>Teacher</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The custom notebooks we ordered exceeded our expectations. 
                        The quality of the materials and the precision of the printing truly reflected our 
                        brand's professionalism. Our team and clients are impressed!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/team2.png" class="testimonial-img" alt="">
                    <h3>Amoding Sandra </h3>
                    <h4>Owner God Cares</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The customized keyholders and flash drives were a huge hit at our trade show. 
                        The attention to detail and quality made a strong
                         impression on our potential clients. We'll definitely be ordering more!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/team5.jpg" class="testimonial-img" alt="">
                    <h3>Walero Brandon</h3>
                    <h4>House Of Hope Foundation</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>The wristbands for our charity event were a big success. They were comfortable, stylish, and the custom designs were spot-on.
                         They helped us raise awareness and looked great on everyone!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/team3.png" class="testimonial-img" alt="">
                    <h3>Mwebaze Frank</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Working with Bmaxi Graphics on our billboard campaigns was a game-changer. The design was bold,
                         eye-catching, and perfectly aligned with our brand. The quality of the print was outstanding, and the entire process was seamless from start to finish. Our message 
                        stood out, and the response was incredible. We couldn't be happier with the results!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
    
  
      </section><!-- /Testimonials Section -->

      <a href="https://wa.me/256778282826" class="fab" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo">
    </a>
    </section>
  
    <?php
    include('includes/footer.php')
    ?>
      