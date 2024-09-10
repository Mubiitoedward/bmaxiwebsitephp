<?php
    include('includes/navbar.php')
    ?>
 <!-- Page Title -->
 <div class="page-title dark-background" style="background-image: url(assets/img/bg4.jpg)">
      <div class="container position-relative">
        <h1>Project Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Project Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Project Details Section -->
    <section id="project-details" class="project-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/accolades2.jpeg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/projects/branding1.jpeg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="assets/img/booths.jpeg" alt="">
            </div>

             <div class="swiper-slide">
              <img src="assets/img/craftedbags.jpeg" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">

              <h2> PROMOTIONAL MATERIALS</h2>
              </p>
              Using promotional items strategically can 
help you increase leads, sales, customer 
loyalty and brand awareness. </p>

<p></p>

<div class="testimonial-item">
  <p>
    <i class="bi bi-quote quote-icon-left"></i>
    <span> Designing is about transforming ideas into visual experiences that communicate, inspire, and resonate with people on a deeper level. It's the art of balancing creativity with functionality to create solutions that are not only beautiful but also purposeful.</span>
    <i class="bi bi-quote quote-icon-right"></i>
  </p>
  <div>
    <img src="assets/img/testimonials/team2.png" class="testimonial-img" alt="">
    <h3>Namuyanja Gift</h3>
    <h4>Creative Designer</h4>
  </div>
  <p></p>
 
             <!-- <p>
                We do screen printing on shirts, embroidery 
                on t-shirts, caps, head scu s, corporate wear; 
                diary and pen branding, banners, tear drops, 
                roll ups, backdrop banner, tyre covers, stickers 
                (bumper stickers and label stickers), 
                designing and printing bill boards etc. 
              </p>  -->


              <h2>SIGNAGE AND 
                DISPLAY 
                SOLUTIONS</h2>
              <p>
                We design and produce indoor and outdoor 
signs, banners, and exhibition displays that 
grab attention and leave a lasting impression, 
including:

<ul>
  <li><i class="bi bi-check-circle"></i> <span>Retail signage, event signage, and 
    directional signage</span></li>
  <li><i class="bi bi-check-circle"></i> <span> Custom banner stands, pop-up displays, 
    and exhibition booths</span></li>
  <li><i class="bi bi-check-circle"></i> <span> Installation services for seamless setup</span></li>
</ul>

              </div>

 

            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Contact Information</h3>
              <ul>
                <li><strong>Email</strong>bmaxiprint18@gmail</li>
                <li><strong>Tel</strong> +256 778 282826 / +256 703 891474</li>
                <li><strong>Location</strong>Nasser Mall Room S.10 Nasser Road Kampala</li>
                <li><strong>PoBox</strong> <a href="#">P.O.Box 22516</a></li>
                <li><a href="contacts" class="btn-visit align-self-start">Request Quote</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Project Details Section -->
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
<?php
    include('includes/footer.php')
    ?>