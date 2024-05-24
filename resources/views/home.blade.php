<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzeliah MUA | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        /* CSS untuk menambahkan spasi antara setiap bagian */
        .hero {
            margin-bottom: 40px; /* Menambahkan spasi 40px di bawah bagian hero */
        }

        .about {
            margin-top: 40px; /* Menambahkan spasi 40px di atas bagian tentang */
            margin-bottom: 40px; /* Menambahkan spasi 40px di bawah bagian tentang */
            padding: 50px;
        }

        .testimonials {
            margin-top: 40px; /* Menambahkan spasi 40px di atas bagian testimoni */
        }
        .text-center {
            text-align: center;
        }
        .title {
            color: #fff; /* Text color: white */
            font-size: 36px; /* Font size */
            margin-bottom: 0; /* Remove margin from bottom */
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.3); /* Add text shadow */
            padding: 20px; /* Add padding to create the box */
            background-color: #333; /* Set the background color of the box */
            border: 1px solid #fff; /* Add a border to the box */
            border-radius: 5px; /* Add rounded corners to the box */
        }
.row {
  display: flex;
  align-items: center;
}

.col-md-6 {
  flex: 1;
  padding: 20px;
}

.col-md-6 img {
  width: 100%;
  height: auto; /* Menjaga rasio 1:1 */
  margin-bottom: 20px;
}

.video-container {
  margin: 20px;
  padding: 10px;
  order: 2;
}

.video-container video {
  width: 100%;
  height: auto;
}
.contact .contact-icon {
    max-width: 100px; /* Atur lebar maksimum */
    max-height: 100px; /* Atur tinggi maksimum */
    margin-bottom: 20px; /* Tambahkan margin di bawah gambar */
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
    <main>
      <section class="hero" style="padding: 60px 0; margin-top: 70px;" id="contact" >
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-sm-4">
                <img src="images/homeprofile.jpeg" alt="Rzeliah MUA Profile" class="img-fluid rounded-circle mx-auto d-block">
            </div>
            <div class="col-md-9 col-sm-8">
                <h1>Rzeliah MUA</h1>
                <h2>Makeup Artist Bandung</h2>
                <p>Menyulap kecantikan alami Anda dengan sentuhan profesional.</p>
                <a href="/contact-us">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>
        <hr style="border-top: 1px solid #ccc; margin-top: 0;">
        <section class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="video-container">
                    <video width="100%" height="auto" controls style="max-width: 100%;">
                        <source src="{{ asset('video/Homepagevid1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
    <img src="{{ asset('images/logo1.jpeg') }}" alt="Logo Rzeliah MUA" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 15px;">
    <h2>Tentang Kami</h2>
    <p>Rzeliah MUA adalah tim makeup artist profesional yang berpengalaman di Bandung. Kami menawarkan berbagai layanan makeup untuk berbagai acara, seperti pernikahan, wisuda, pesta, dan lainnya.</p>
    <p>Kami berkomitmen untuk memberikan pelayanan terbaik bagi setiap klien kami. Kami menggunakan produk makeup berkualitas tinggi dan teknik makeup yang modern untuk menghasilkan riasan yang flawless dan tahan lama.</p>
</div>

        </div>
    </div>
</section>
<hr style="border-top: 1px solid #ccc; margin-top: 0;">
        <section class="gallery">
            <div class="container-fluid">
            <h1 class="text-center title"><a href="/gallery" style="color: white; text-decoration: none;">Rzeliah MUA's Gallery</a></h1>
            <div style="margin-bottom: 20px;"></div>
            <div class="row">
                    @php
                        $total_images = 3; // Change this to the total number of images you want to display
                    @endphp
                    @for ($i = 1; $i <= $total_images; $i++)
                        <div class="col-md-4">
                            <a href="images/portofolio/{{ $i }}.jpg" class="image-link">
                                <img src="images/portofolio/{{ $i }}.jpg" alt="Gambar {{ $i }}" class="img-fluid">
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <hr style="border-top: 1px solid #ccc; margin-top: 0;">
        <section class="testimonials">
  <div class="container-fluid">
    <h2 class="text-center title"><a href="/testimoni" style="color: white; text-decoration: none;"></a>Testimoni</h2>
    <div style="margin-bottom: 20px;"></div>
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <p>"Makeupnya aman sampai sore, natural, terus banyak yang bilang cantik hehehe, ringan di muka seperti ga pakai Makeup. Terima kasih!"</p>
          <p class="client-name">- Mega</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <p>"Make Up nya Bagusss, Rapi, dan Tahan sampai acaranya selesai, Cicinya ramah banget dan kerjanya cepat. Sangat Rekomendasi"</p>
          <p class="client-name">- Sharon</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <p>"Make Up nya agak kena air hujan tapi masih aman dan masih ga crack make up nya sama sekali. Makasih banyak yaa"</p>
          <p class="client-name">- Nabilla</p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr style="border-top: 1px solid #ccc; margin-top: 0;">
<section class="contact">
    <div class="container-fluid">
        <h2 class="text-center title">Hubungi Kami</h2>
        <div style="margin-bottom: 20px;"></div>
        <div class="row justify-content-center"> <!-- Menggunakan justify-content-center untuk tengah secara horizontal -->
            <div class="col-md-4 text-center">
                <a href="https://www.instagram.com/rzeliah_mua" target="_blank">
                    <img src="images/IG.png" alt="Instagram" class="contact-icon">
                </a>
                <p>Instagram</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="https://wa.me/6287722170699" target="_blank">
                    <img src="images/WA.png" alt="WhatsApp" class="contact-icon">
                </a>
                <p>WhatsApp</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="https://www.tiktok.com/@rzeliah_mua" target="_blank">
                    <img src="images/tiktok.png" alt="TikTok" class="contact-icon">
                </a>
                <p>TikTok</p>
            </div>
        </div>
    </div>
</section>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.image-link').magnificPopup({type:'image'});
        });
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
