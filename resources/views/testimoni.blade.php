<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzeliah MUA | Testimonials</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        .navbar {
            margin-bottom: 50px; /* Tambahkan jarak dari navigasi ke konten */
        }
        .testimonial-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        .testimonial {
            text-align: center;
            margin-bottom: 30px;
        }
        .testimonial img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .testimonial h5 {
            margin-top: 15px;
            font-weight: bold;
        }
        .testimonial p {
            font-style: italic;
            color: #555;
        }
        .content {
            padding-top: 100px; /* Space to avoid navbar overlap */
        }
    </style>
</head>
<body>
    <header class="fixed-top" id="navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light d-flex justify-content-end">
                <div class="container d-flex w-100">  
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Rzeliah MUA Logo" width="" height="50">
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link text-muted">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/price" class="nav-link text-muted">Price</a>
                        </li>
                        <li class="nav-item">
                            <a href="/gallery" class="nav-link text-muted">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="/testimoni" class="nav-link text-muted">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact-us" class="nav-link text-muted">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="content">
        <!-- Other sections of the webpage -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="container">
                <h2 class="text-center mb-5">Testimonial</h2>
                <hr style="border-top: 1px solid #ccc; margin-top: 0;">

                <div class="row border-bottom pb-4 mb-4">
                    <div class="col-md-4">
                        <div class="testimonial">
                            <h5>Mega</h5>
                            <p>"Makeupnya aman sampai sore, natural, terus banyak yang bilang cantik hehehe, ringan di muka seperti ga pakai Makeup. Terima kasih!."</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <h5>Bella</h5>
                            <p>"Suka sama make up nya, tetap aman dan ga luntur. seneng pokoknya"</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <h5>Michele</h5>
                            <p>"Make up nya awet sampe malem, cuma tambahin lipcream sama eyeliner dan gausah retouch lagi."</p>
                        </div>
                    </div>
                </div>

                <div class="row border-bottom pb-4 mb-4">
                    <div class="col-md-4">
                        <div class="testimonial">
                            <h5>Novita</h5>
                            <p>"Make up nya tahan, smile line nya jelas. Terimakasih ya."</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <h5>Nabila</h5>
                            <p>"Make Up nya agak kena air hujan tapi masih aman dan masih ga crack make up nya sama sekali. Makasih banyak yaa."</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <h5>Evelyn</h5>
                            <p>"Make up nya bagus banget, aku cobain video no filter, ga ada crack sama sekali. Lipstik nya juga awet."</p>
                        </div>
                    </div>
                </div>

                <div class="row border-bottom pb-4 mb-4">
                <div class="col-md-6">
                        <div class="testimonial">
                            <h5>Sharon</h5>
                            <p>"Make Up nya Bagusss, Rapi, dan Tahan sampai acaranya selesai, Cicinya ramah banget dan kerjanya cepat. Sangat Rekomendasi."</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonial">
                        <h5>Sharon Veronica</h5>
                            <p>"Make up nya bagus banget, kata temen-temen juga cantik. Make up nya awet sampai malem. Thaank you."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
