 <?php
include('includes/navbar.php');
 ?>
 
 <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>Welcome to Bmaxi Graphics</h2>
              <p>Elevate your brand with our expert services in branding, 
                graphic design, and printing. We craft visually compelling identities that resonate with your audience and bring your vision to life.</p>
              <a href="#get-started" class="btn-get-started">Request Quote</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets/img/largeformat.jpeg" alt="">
        </div>

        <div class="carousel-item active">
          <img src="assets/img/bg3.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/jumiaacolades.jpeg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/bmaxibanner.png" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/bg5.jpg" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->
    

    <!-- Get Started Section -->
    <section id="get-started" class="get-started section">

      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="content">
              <h3>Who We Are.</h3>
              <p> At Bmaxi Graphics, we are motivated by 
                creative thinking to oer unique solutions to 
                di erent design and printing questions 
                e ciently and eectively to meet our clients’ 
                needs through a comprehensive range of 
                services. We have steadily progressed in our 
                services over the years; in our expertise, quality 
                production and timely delivery which is 
                greatly supported by our expertly skilled and 
                highly experienced personnel
              </p>
              <p>From concept to creation, we deliver impactful designs and premium print solutions tailored to make your brand stand out.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
            <form action="contactform.php" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Ready to bring your vision to life? Request a quote today and let's start creating something extraordinary.</p>
              <div class="row gy-3">

                <div class="col-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required="">
                </div>

                <div class="col-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>

    </section><!-- /Get Started Section -->

    <!-- Constructions Section -->
    <section id="constructions" class="constructions section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Creative Developments</h2>
        <p>Discover the art of exclusivity with our bespoke designs and premium print solutions, crafted uniquely for your brand.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/savingsbox.jpeg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Local Savings Box.</h4>
                    <p>
                      Introducing our locally crafted Savings Box—your trusted companion for building a brighter financial future at home. Thoughtfully designed and beautifully branded by our team, this savings box is more than just a container; it's a symbol of commitment to your financial goals.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"><img src="assets/img/craftedbags.jpeg" alt=""></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Crafted Bags</h4>
                    <p>Experience the perfect blend of tradition and modernity with our exquisitely crafted bag, accessorized with vibrant kitenge fabric. Each piece is custom-branded to reflect your unique style, offering a fusion of cultural richness and contemporary design.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->


        </div>

      </div>

    </section><!-- /Constructions Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">




      <section id="instructors" class="p-5">
        <div class="container">
          <h2 class="text-center text-black">Our Services</h2>
          <p class="lead text-center text-black mb-5">
            We offer a comprehensive range of services designed to elevate your brand and business.
          </p>
          <div class="row g-4">
            <div class="col-md-6 col-lg-2">
              
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light" style="width: 18rem;">
                <img src="assets/img/wristbands4.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="text-center text-black">Designing</h5>
                  <p class="card-text">Our expert designers transform ideas into impactful 
                    Experiences </p>
                    <a href="servicedetails.php" >
                      <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light" style="width: 18rem;">
                <img src="assets/img/branding4.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="text-center text-black">Branding</h5>
                  <p class="card-text">Our branding services are designed to craft a unique story. </p>
                     <a href="servicedetails.php">
                      <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light " style="width: 18rem;">
                <img src="assets/img/idpacks.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="text-center text-black">Printing</h5>
                  <p class="card-text"> We have diterent machines to 
                    ensure premium printing 
                  </p>
                    
                    <a href="servicedetails.php">
                      <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      
            </div>
          </div><!-- End Service Item --> 

          

    </section><!-- /Services Section -->

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/signages.jpeg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>What Makes Us Different</h3>
            <p> our commitment to personalized, high-quality solutions that truly reflect your brand's essence. We combine creativity, craftsmanship, and attention to detail to deliver results that not only meet but exceed your expectations.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Mission</a></h4>
                <p>To empower businesses by delivering innovative branding, graphic design, and printing solutions that resonate with their audience and elevate their market presence.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">vision</a></h4>
                <p>To be the leading creative partner for businesses, known for our ability to transform ideas into impactful brands and exceptional print products.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Customer Satisfaction</a></h4>
                <p>Our goal is to build long-lasting relationships with our clients by consistently delivering value and exceeding their expectations. </p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
              <i class="bi bi-moon-stars flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Commitment to Sustainability</a></h4>
                <p>We are dedicated to using eco-friendly materials and processes in our printing and design services, helping to create a sustainable future.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>

    </section><!-- /Alt Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  g-6 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

          <li class="nav-item col-4" role="presentation">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
              <h4>Branding</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-4" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" tabindex="-1" role="tab">
              <h4>Printing</h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item col-4" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" tabindex="-1" role="tab">
              <h4>Designing</h4>
            </a>
          </li><!-- End tab nav item -->

        

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Talk Of Branding</h3>
                 <!-- <p class="fst-italic">  -->
                  <p>
                  we work closely with you to develop a brand that resonates with your target audience.
                  Let us help you build a brand that stands out, inspires loyalty, and drives success.
                  
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><b>Brand Identity Creation:</b> Develop a strong, cohesive brand identity that resonates with your target audience.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><b>Rebranding:</b> Revitalize your existing brand to stay relevant and competitive in a changing market.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span> <b> Brand Strategising:</b> Tailor-made strategies that align with your business goals and market positioning.</span></li>
                  
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/branding4.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>About Printing</h3>
                <p class="fst-italic">
                  Our state-of-the-art printing facilities and expert team deliver high-quality offset 
and digital printing services, including:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Business cards, brochures, flyers, posters, and more.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Custom printing solutions for unique projects and promotions.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Fast turnaround times without compromising on quality.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Textile materials like corporate shirts, t shirts capes and hats, with screen printing, and heatpress</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/xeroxvector.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Talk About Our Graphics Designs</h3>
                <p class="fst-italic">
                  Whether you're looking to build a brand identity from scratch or refresh an existing one, 
                  our graphic design services are here to make your dream come to life.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><b> Designs:</b> Tailored to reflect your brand's unique personality and values.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><b>Expert Designers:</b> A talented team with a keen eye for detail and a passion for creativity.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><b>Comprehensive Solutions:</b> From logos and branding materials to digital content and packaging.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span><b>High-Impact Visuals:</b>Designs that capture attention and leave a lasting impression.</span></li>
                </ul>
               
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/designing2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->


        </div>

      </div>

    </section><!-- /Features Section -->

    <a href="https://wa.me/256778282826" class="fab" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo">
  </a>

    <!-- Projects Section -->
    <section id="projects" class="projects section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Projects</h2>
        <p>Our projects reflect our commitment to excellence, creativity, and client satisfaction</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Branding</li>
            <li data-filter=".filter-construction">Printing</li>
            <li data-filter=".filter-repairs">Promotional Materials</li>
            <li data-filter=".filter-design">Designs</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/branding4.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>branded accolades</h4>
                  <p>We offer personalized 3D embossing on our printed accolades, adding a unique tactile dimension that sets your awards apart and makes them truly memorable.</p>
                  <a href="assets/img/projects/branding2.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/branding3.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branded water bottles</h4>
                  <p>We use high-quality materials and advanced printing techniques to ensure your logo and branding stand out</p>
                  <a href="assets/img/projects/branding3.jpeg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/pullups.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>pullup banners</h4>
                  <p>With durable materials and vibrant colors, these banners are both eye-catching and long-lasting.</p>
                  <a href="assets/img/projects/pullups.jpeg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/printing1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Magazines</h4>
                  <p>We offer premium magazine printing services that bring your content to life with exceptional clarity and style. Whether it's for company publications, product catalogs, or lifestyle magazines</p>
                  <a href="assets/img/projects/printing1.jpeg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/notebook1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Notebooks</h4>
                  <p>We provide custom-printed notebooks that combine functionality with personalized branding, making them perfect for corporate gifts, event giveaways, or everyday office use. </p>
                  <a href="assets/img/projects/notebook1.jpeg.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/bags.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Custom Bags</h4>
                  <p>We specialize in creating customized crafted bags that combine style, durability, and brand identity. Whether for corporate gifting, promotional events.</p>
                  <a href="assets/img/projects/bags.jpeg.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projectsbrandedtshirts.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Customised shirts</h4>
                  <p>We offer custom-designed shirts that seamlessly blend comfort and style with your brand's identity. Perfect for corporate events, team uniforms, or promotional giveaways</p>
                  <a href="assets/img/projects/brandedtshirts.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/keyholder.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Promotional items</h4>
                  <p>
                    We provide a wide range of promotional items, including customized keyholders, flash drives, and more, designed to boost your brand’s visibility and leave a lasting impression.</p>
                  <a href="assets/img/projects/clock.jpeg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/notebook4.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>customised notebooks</h4>
                  <p>You can choose from a variety of cover materials, binding styles, and page layouts, and we can even incorporate your logo, brand colors, and custom designs. </p>
                  <a href="assets/img/projects/notebook4.jpeg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/giftpacks2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>custom giftpacks</h4>
                  <p>We work closely with you to design and assemble gift packs that reflect your brand’s identity and deliver a unique and thoughtful experience. </p>
                  <a href="assets/img/projects/giftpacks2.jpeg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/brandedtshirts.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>customised t shirts</h4>
                  <p>We offer custom-designed shirts that seamlessly blend comfort and
                     style with your brand's identity. Perfect for corporate events, team uniforms, 
                     or promotional giveaways, our shirts are crafted 
                    from high-quality fabrics and tailored to ensure a great fit.</p>
                  <a href="assets/img/projects/brandedtshirts.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/wristbands4.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>custom wristbands</h4>
                  <p>We design and print custom wristbands that are perfect for events,
                     promotions, or team identification. Made from high-quality materials
                      such as silicone, fabric, or vinyl, our wristbands are designed for 
                      durability and comfort</p>
                  <a href="assets/img/projects/wristbands4.jpeg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="projectsdetails" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Projects Section -->
   

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

    <?php
    include('includes/footer.php');
    ?>