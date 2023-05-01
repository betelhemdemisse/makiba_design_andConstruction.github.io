<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>makiba design and construcion</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  
    
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</head>
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

    <header id="header" class="header d-flex align-items-center">
        {{-- <h1><img src="assets/img/makiba_archtech_logo.jpg" style="width:40%;" alt=""></h1> --}}
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
             
            
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
              <ul>
                <li><a href="{{route('makiba.home')}}" class="active">Makiba</a></li>
                <li><a href="about.html" >portfolio</a></li>
                <li class="dropdown"><a href="{{route('contract.works')}}"><span>contract works</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="{{route('metal.works')}}">Metal Work</a></li>
                      <li><a href="{{route('gybsum.works')}}">gypsum Work</a></li>
                      <li><a href="{{route('sanitary.works')}}">sanitary Work</a></li>
                      <li><a href="{{route('electrical.works')}}">electrical Work</a></li>
                    </ul>
                  </li>
                <li class="dropdown"><a href="#"><span>furnitures</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="{{route('contract.works')}}">Order Custom Makiba Furnitures</a></li>
                      <li><a href="{{route('Sofa.works')}}">Sofa</a></li>
                      <li><a href="{{route('Bed.works')}}">Bed</a></li>
                      <li><a href="{{route('Wardrop.works')}}">Wardrop</a></li>
                      <li><a href="{{route('Dinning_Table.works')}}">Dinning Table</a></li>
                      <li><a href="{{route('Tv_Stand.works')}}">Tv Stand</a></li><li>
                      <li><a href="{{route('Coffee_table.works')}}">Coffee table</a></li>
                      <li><a href="{{route('Shelf.works')}}">Shelf</a></li>
                      <li><a href="{{route('Office_Table.works')}}">Office Table</a></li>
                      <li><a href="{{route('Kitchen_Cabinet.works')}}">Kitchen Cabinet</a></li>
                    </ul>
                  </li>
                <li class="dropdown"><a href="{{route('contract.works')}}"><span>design and construction</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="{{route('Residential_Design.works')}}">Residential Design</a></li>
                    <li><a href="{{route('Commercial_Design.works')}}">Commercial Design</a></li>
                    <li><a href="{{route('3D_Modeling_Rendering.works')}}">3D Modeling Rendering</a></li>
                    
                  </ul>
                </li>
                <li><a href="{contact.html}">Contact</a></li>
              </ul>
            </nav>
      
          </div>
        
    </header>
    
    <section id="hero" class="hero">

        <div class="info d-flex align-items-left"style="height:50%">
          <div class="container" >
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                {{-- <h2 data-aos="fade-down" class="aos-init aos-animate">Welcome to <span>makiba design and construction</span></h2> --}}
                {{-- <p data-aos="fade-up" class="aos-init aos-animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                <div>
                    <h1 style="font-size:37;margin-bottom:4%;margin-top:20%;">makiba design and construction<div class="roller">
                      <span id="rolltext">design  construction<br/>
                     furniture<br/>
                    contract works<br/>
                      <span id="spare-time">too much spare time?</span><br/>
                      </div>
                      </h1>
                      
                    </div>
              </div>
            </div>
          </div>
        </div>
    
        <div id="hero-carousel" class="carousel slide pointer-event" data-bs-ride="carousel" data-bs-interval="2000">
    
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>
    
          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>
    
          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
    
        </div>
    
      </section>
      <main>
        <div>
          <section>
               
          </section>
            @yield('content')
        </div>
    </main>

  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>makiba design and construction</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br>
                <strong>Phone:</strong> +2519-53-94-28-85   
               <p style="margin-left: 45px;">+2519-13-40-69-25</p> 
                <strong>Email:</strong>natanemzemariam@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->


          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="{{route('contract.works')}}">contract works</a></li>
              <li><a href="{{route('contract.works')}}">furniture</a></li>
              <li><a href="{{route('contract.works')}}">design and construction</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          © Copyright <strong><span>makiba design and construction</span></strong>
        </div>
        <div class="credits">
        </div>
      </div>
    </div>

  </footer>


</body></html>
  