<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/asset about/assets/images/Institut Teknologi Del.png') }}" rel="icon">

    <!-- =========== 1 ============================================================================================================================================================ -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS File -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- ============== 2 ========================================================================================================================================================= -->

    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/asset about/assets/css/style-starter.css') }}">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>

    <!-- ========= ========================================================================================================================================================= -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/aos/aos.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables.css') }}"
        rel="stylesheet">
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/assets - untuk program studi di halaman tentang/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <!-- topbar -->
    @include('includes/topbar')
    <!-- Akhir topbar -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- Tambahkan logo disini -->
            <h1 class="logo me-auto">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/Institut Teknologi Del.png') }}">
                    Fakultas Vokasi
                </a>
            </h1>

            <!-- navbar -->
            @include('includes.navbar')
            <!-- Akhir navbar -->

        </div>
    </header>
    <!-- ======= Akhir Header ======= -->

    <main id="main">

        <!-- ======= Breadcrumbs  ======= -->
        <section style="margin-bottom:1%" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Struktur Organisasi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name" style="color: #1977cc">Struktur Organisasi</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->


        <div class="container py-lg-4 py-md-2">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-lg-0 mb-md-4 mb-4 text-center">
                    <h2 class="section-title"> {!! nl2br($struktur_organisasi->nama_struktur_organisasi) !!}
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mb-4">
                    <img src="{{ asset('storage/' . $struktur_organisasi->gambar) }}" alt="Struktur Organisasi"
                        style="max-width: 100%; height: auto;">
                    <!-- Mengatur maksimum lebar dan tinggi otomatis -->
                </div>
            </div>
        </div>






        <!-- footer -->
        @include('includes/footer')
        <!-- Akhir footer -->

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>

    </main><!-- End #main -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <!-- ======== assets 1 ===================================================================================================================================================================== -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>



    <!-- ======== assets 2 ===================================================================================================================================================================== -->

    <!-- Scripts -->
    <script>
        window.addEventListener('scroll', function() {
            var movetop = document.getElementById('movetop');
            if (window.scrollY > 20) {
                movetop.style.display = 'block';
            } else {
                movetop.style.display = 'none';
            }
        });

        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <!-- /Scripts -->

    <!-- /Section -->

    <!-- Copyright -->
    <!-- Scripts -->
    <script src="{{ asset('assets/asset about/assets/js/jquery-3.3.1.min.js') }}"></script> <!-- Common jquery plugin -->
    <script src="{{ asset('assets/asset about/assets/js/theme-change.js') }}"></script><!-- theme switch js (light and dark)-->
    <!--/MENU-JS-->
    <script>
        window.addEventListener('scroll', function() {
            var siteHeader = document.getElementById('site-header');
            if (window.scrollY >= 80) {
                siteHeader.classList.add('nav-fixed');
            } else {
                siteHeader.classList.remove('nav-fixed');
            }
        });

        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('header').classList.toggle('active');
        });

        window.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth > 991) {
                document.querySelector('header').classList.remove('active');
            }
            window.addEventListener('resize', function() {
                if (window.innerWidth > 991) {
                    document.querySelector('header').classList.remove('active');
                }
            });
        });
    </script>
    <!--/MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.body.classList.toggle('noscroll');
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('assets/asset about/assets/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->


    <!-- ================================================================================================================= -->



    <!-- Vendor JS Files -->
    <script
        src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/aos/aos.js') }}"></script>
    <script
        src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/glightbox/js/glightbox.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/isotope-layout/isotope.pkgd.min.js') }}">
    </script>
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/swiper/swiper-bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/vendor/php-email-form/validate.js') }}">
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/assets - untuk program studi di halaman tentang/js/main.js') }}"></script>
</body>

</html>
