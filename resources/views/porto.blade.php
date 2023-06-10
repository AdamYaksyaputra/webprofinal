<!DOCTYPE html>
<html lang="en">
<head>

     <title>Adam's Portofolio - Profile HTML Page</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('porto/css/all.min.css')}}">
     <link rel="stylesheet" href="{{ asset('porto/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{ asset('porto/css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{ asset('porto/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('porto/css/tooplate-ben-resume-style.css')}}">
<!--
Tooplate 2120 Ben Resume
https://www.tooplate.com/view/2120-ben-resume
-->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand" href="#">
                Adam Resume
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#intro" class="nav-link smoothScroll">Introduction</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Me</a>
                    </li>

                    <li class="nav-item">
                        <a href="#testimonials" class="nav-link smoothScroll">Recent Activities</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

         <div class="container">
            <div class="row">

                  <div class="mx-auto col-lg-5 col-md-5 col-10">
                      <img src=" {{ asset ('porto/images/ben.jpg')}}" class="img-fluid" alt="Ben Resume HTML Template">
                  </div>

                   <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                        <div class="hero-text">

                            <h1 class="hero-title">👋 Adam, a student at Bina Nusantara University</h1>

                            <a href="#" class="email-link">
                                adam.hadian@binus.ac.id
                            </a>

                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="mb-4">This is My Resume</h3>

                    <p>Halo! Selamat datang di web pribadi saya! Di website ini, anda dapat melihat informasi tentang aktifitas saya. Saat ini saya berstatus sebagai mahasiswa aktif Universitas Bina Nusantara dan sedang beljar di fakultas Computer Science.</p>

                    <p>Saya ingin menjadi programmer Fullstack dan ini merupakan salah satu aktifitas pembelajaran saya.</p>

                    <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                        <li><strong>Nama            :</strong> Adam Yaksyaputra Hadian </li>

                        <li><strong>Tanggal Lahir   :</strong> 14 Oktober 2002</li>

                        <li><strong>Status          :</strong> Mahasiswa</li>

                        <li><strong>Email           :</strong> adam.hadian@binus.ac.id</li>
                    </ul>
                </div>

                <div class="col-lg-5 mx-auto col-md-6 col-12">
                    <img src="{{ asset ('porto/images/true-agency.jpg') }}" class="about-image img-fluid" alt="Ben's Resume HTML Template">
                </div>

            </div>

            <div class="col-12">
                <div class="container">
                    <div class="row" style="margin-top: 100px;">

                     <h3 class="mb-5 text-center">Riwayat Sekolah</h3>

                    </div>
                </div>
            </div>
            <div class="row about-third">
            	<div class="col-lg-4 col-md-4 col-12">
                <h3>SMPN 1 Malang</h3>
                <p>Saya bersekolah disini selaa 3 tahun. Di jenjang ini saya mengikuti ekstrakulikuler basket dan pernah menjuarai berbagai macam perlombaan yang saya ikuti.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <h3>SMAN 8 Malang</h3>
                <p>Seperti jenjang sebelumnya, saya bersekolah disini selama 3 tahun dan mengambil penjurusan IPA. </p>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <h3>Binus University</h3>
                <p>Merupakan Universitas yang saya tempati saat ini. </p>
                </div>
            </div>
        </div>
    </section>


    <!-- TESTIMONIAL -->
     <section class="testimonials section-padding" id="testimonials">
          <div class="container">
               <div class="row">

                    <div class="col-12">
                        <h3 class="mb-5 text-center">Latest Activities</h3>

                        <div class="owl-carousel owl-theme" id="testimonials-carousel">
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{ asset ('porto/images/testimonials/testimonial-image01.jpg') }}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Berkeliling kota dan berkeliling di Gili Ketapang</p>

                                        <h6 class="mb-0">Vacation</h6>
                                        <span>Probolinggo</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{ asset ('porto/images/testimonials/testimonial-image02.jpg') }}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Melakukan kerja kelompok untuk mengerjakn project di kampus bersama teman - teman saya. </p>

                                        <h6 class="mb-0">Group Study</h6>
                                        <span>Binus Malang</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{ asset ('images/testimonials/testimonial-image03.jpg') }}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Mengambil beberapa course yang tersedia online untuk mengembangkan skill.</p>

                                        <h6 class="mb-0">Taking Course</h6>
                                        <span>Online</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{ asset ('images/testimonials/testimonial-image04.jpg') }}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Membuka bisnis dengan menjual makanan berupa bubur di Kota Malang</p>

                                        <h6 class="mb-0">Start a Business</h6>
                                        <span>Mbubur Isuk</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

               </div>
          </div>
     </section>



           	 </div><!-- col -->
        	</div><!-- row -->
        </div><!-- container -->
    </section>


     <section class="contact section-padding pt-0" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-12">
            <form action="#" method="get" class="contact-form webform"  role="form">

                <div class="form-group d-flex flex-column-reverse">
                    <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="Your Name">

                    <label for="cf-name" class="webform-label">Nama</label>
                </div>

                <div class="form-group d-flex flex-column-reverse">
                    <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="Your Email">

                    <label for="cf-email" class="webform-label">Email</label>
                </div>

                <div class="form-group d-flex flex-column-reverse">
                    <textarea class="form-control" rows="5" name="cf-message" id="cf-message" placeholder="Your Message"></textarea>

                    <label for="cf-message" class="webform-label">Pesan</label>
                </div>

                <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
            </form>
          </div>

            <div class="mx-auto col-lg-4 col-md-6 col-12">
                <h3 class="my-4 pt-4 pt-lg-0">Contact Me</h3>

                <p class="mb-1">0822-4356-6969</p>

                <p>
                    <a href="#">
                        adam.hadian@binus.ac.id
                    <i class="fas fa-arrow-right custom-icon"></i>
                    </a>
                </p>

                <ul class="social-links mt-2">
                    <li><a href="https://www.facebook.com/adam.hadian.9" rel="noopener" class="fab fa-facebook"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-twitter"></a></li>
                    <li><a href="#" rel="https://www.instagram.com/adamyh_" rel="noopener" class="fab fa-instagram"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-linkedin"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                </ul>
        </div>
      </div>
    </section>
     <!-- SCRIPTS -->
     <script src="{{ asset ('porto/js/jquery.min.js')}}"></script>
     <script src="{{ asset ('porto/js/bootstrap.min.js')}}"></script>
     <script src="{{ asset ('porto/js/smoothscroll.js"')}}"></script>
     <script src="{{ asset ('porto/js/owl.carousel.min.js')}}"></script>
     <script src="{{ asset ('porto/js/custom.js')}}"></script>

</body>
</html>
