<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzeliah MUA | Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .navbar {
            margin-bottom: 50px; /* Tambahkan jarak dari navigasi ke konten */
        }
        .social-media-link {
            color: black; /* Mengatur warna teks nama sosial media */
            text-decoration: none; /* Menghapus dekorasi teks tautan */
        }
    </style>
</head>
<body>
<header class="fixed-top" id="navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light d-flex justify-content-end">
            <div class="container d-flex w-100">  
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="logo"  width="" height="50">
                </a>
                <ul class="navbar-nav ml-auto">
                    <a href="/" class="nav-link text-muted">Home &emsp;</a>
                    <a href="/price" class="nav-link text-muted">Price &emsp;</a>
                    <a href="/gallery" class="nav-link text-muted">Gallery &emsp;</a>
                    <!-- <a href="/jadwal" class="nav-link text-muted">Jadwal &emsp;</a> -->
                    <li class="nav-item">
                            <a href="/testimoni" class="nav-link text-muted">Testimoni</a>
                        </li>
                    <a href="/contact-us" class="nav-link text-muted">Contact Us &emsp;</a>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section id="contact" class="services" style="margin-top: 90px;">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami melalui yang berikut ini:</p>
        <div class="row">
            <!-- Instagram -->
            <div class="col-md-12 mb-3">
                <a href="https://www.instagram.com/rzeliah_mua" target="_blank" class="d-flex align-items-center social-media-link">
                    <img src="{{ asset('images/IG.png') }}" alt="Instagram" width="100" class="mr-3">
                    <span> &nbsp; rzeliah_mua</span>
                </a>
            </div>
            <!-- TikTok -->
            <div class="col-md-12 mb-3">
                <a href="https://www.tiktok.com/@rzeliah_mua" target="_blank" class="d-flex align-items-center social-media-link">
                    <img src="{{ asset('images/TikTok.png') }}" alt="TikTok" width="100" class="mr-3">
                    <span>&nbsp; @rzeliah_mua</span>
                </a>
            </div>
            <!-- WhatsApp -->
            <div class="col-md-12 mb-3">
                <a href="https://wa.me/6287722170699" target="_blank" class="d-flex align-items-center social-media-link">
                    <img src="{{ asset('images/WA.png') }}" alt="WhatsApp" width="100" class="mr-3">
                    <span> &nbsp; </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        // Menyimpan tinggi navbar
        var navHeight = $('#navbar').outerHeight();
        var lastScrollTop = 0;
        $(window).scroll(function(){
            var scrollTop = $(this).scrollTop();
            // Menentukan arah scroll
            if (scrollTop > lastScrollTop){ // Scroll ke bawah
                // Menyembunyikan navbar saat scroll ke bawah
                $('#navbar').css('top', -navHeight);
            } else { // Scroll ke atas
                // Menampilkan navbar saat scroll ke atas
                $('#navbar').css('top', 0);
            }
            lastScrollTop = scrollTop;
        });
    });
</script>
</body>
</html>
