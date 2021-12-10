<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Home Page | UNSCare
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link href="{{asset('CostumStyle\css\homepage.css')}}" rel="stylesheet">
    <link href="{{asset('https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/aos@next/dist/aos.css') }}"/>

    
</head>
<body>
    <header class="animate__animated animate__fadeInDown">
        <a href="{{ url('/') }}" class="logo">
            <h3 class="logoname">UNSCare</h3>
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="{{ url('notfound') }}">FAQS</a></li>
            <li><a href="{{ url('notfound') }}">ABOUT</a></li>
            <li><a href="{{ url('login') }}">LOGIN</a></li>
            <li><a href="{{ url('register') }}">REGISTER</a></li>
        </ul>
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <span class="animate__animated animate__fadeInUp">Welcome To</span>
            <h1 class="animate__animated animate__fadeInUp">UNSCare</h1>
            <h2 class="animate__animated animate__fadeInUp">Caring for Our University's<br>Most Important Resources</h2>
            <a href="{{ url('register') }}" class="btn animate__animated animate__fadeIn">Join Now</a>
        </div>
        <div class="home-img animate__animated animate__fadeIn">
            <img src="CostumStyle\HomePage\undraw_doctors_hwty.svg" alt="">
        </div>
    </section>

    <section class="explain" id="explain">
        <div class="heading" data-aos="fade-down">
            <h3>What We Can Do</h3>
        </div>
        <div class="explain-container">
            <div class="box" data-aos="fade-right">
                <div class="box-img">
                    <img src="CostumStyle\HomePage\bx-chat.svg" alt="">
                </div>
                <h2>KONSULTASI</h2>
                <p>Konsultasi dengan Dokter berpengalaman dan terverifikasi dengan beragam pilihan dokter umum dan dokter spesialis di UNS</p>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="box-img">
                    <img src="CostumStyle\HomePage\bx-donate-heart.svg" alt="">
                </div>
                <h2>BANTUAN SOSIAL</h2>
                <p>Gotong royong membantu civitas UNS yang terdampak pandemi</p>
            </div>
            <div class="box" data-aos="fade-left">
                <div class="box-img">
                    <img src="CostumStyle\HomePage\bx-plus-medical.svg" alt="">
                </div>
                <h2>PCR & ANTIGEN</h2>
                <p>Layanan Swab Test yang Aman, Cepat, dan Nyaman secara gratis</p>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="heading" data-aos="fade-down">
            <h3>About Us</h3>
        </div>
        <div class="container ">
            <div class="about-img" data-aos="zoom-in">
                <img src="CostumStyle\HomePage\rs_uns.jpeg" alt="">
            </div>
            <div class="about-text" data-aos="fade-up-left">
                <h2>INTRODUCTION</h2>
                <p>UNSCare merupakan Sistem Informasi Kesehatan yang dibuat dengan tujuan untuk menjadi solusi dalam sistem pemantauan dan pengecekan kesehatan civitas UNS dan juga menunjang fasilitas kinerja Medical Center UNS & RS. UNS
                </p>
                <p>Tujuan dibuatnya UNSCare yaitu untuk menunjang fasilitas kinerja Medical Center UNS tanpa harus mengalokasikan beberapa unsur yang berkaitan dengan pembiayaan yang banyak dan membutuhkan waktu yang kurang efisien. Kedepannya UNSCare diharapkan dapat menjadi solusi dalam sistem pemantauan dan pengecekan protokol kesehatan sebagai upaya pencegahan penyebaran COVID-19 dan menunjang kesehatan serta aktivitas civitas UNS di tatanan New Normal.
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>

    <section class="app" id="app">
        <div class="heading" data-aos="fade-down">
            <h3>Download App</h3>
        </div>
        <div class="container">
            <div class="app-text" data-aos="fade-down-right">
                <h2>GET OUR SERVICES</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, recusandae? Earum itaque voluptates aliquam, perspiciatis error quae. Esse, quasi dignissimos.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem deleniti pariatur quas!</p>
                <a href="#" class="btn">Get App</a>
            </div>
            <div class="app-img" data-aos="fade-down-left">
                <img src="CostumStyle\HomePage\undraw_mobile_application_mr-4-r.svg" alt="">
            </div>
    </div>
    </section>

    <section class="contact" id="contact" data-aos="fade-up">
        <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms Of Use</a>
            <a href="#">Our Company</a>
        </div>
        <p>&#169; Universitas Sebelas Maret All Right Reserved.</p>
    </section>

    <script src="CostumStyle\js\HomePage\homepage.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>