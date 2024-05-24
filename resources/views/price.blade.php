<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzeliah MUA | Price</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        .navbar {
            margin-bottom: 50px; /* Tambahkan jarak dari navigasi ke konten */
        }
        .services .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; /* untuk performa di browser Safari */
        }
        .services .container .card {
            flex: 0 0 auto;
            width: 23%; /* Mengatur lebar setiap card */
            margin-right: 20px;
            border-radius: 10px; /* Tambahkan border-radius untuk membuat sudut kotak */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan kecil */
            padding: 20px; /* Tambahkan padding di dalam kotak */
            text-align: center; /* Pusatkan teks */
        }
        .services .container .card h3 {
            border-bottom: 1px solid #ccc; /* Tambahkan garis bawah */
            padding-bottom: 10px; /* Tambahkan jarak antara judul dan konten */
            margin-bottom: 10px; /* Tambahkan jarak tambahan */
            color: #caa854; /* Warna teks */
        }
        .services .container .card p {
            text-align: left; /* Justify paragraf */
        }
        @media (max-width: 768px) {
            .services .container .card {
                width: 45%; /* Sesuaikan lebar kartu untuk layar lebih kecil */
            }
        }
        @media (max-width: 576px) {
            .services .container .card {
                width: 90%; /* Sesuaikan lebar kartu untuk layar lebih kecil */
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
        .terms {
            padding: 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }
        .terms h2 {
            color: #caa854;
            margin-bottom: 20px;
        }
        .terms p, .terms ul {
            text-align: justify;
        }
        .terms ul {
            padding-left: 20px;
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
                        <!-- <li class="nav-item">
                            <a href="/jadwal" class="nav-link text-muted">Jadwal</a>
                        </li> -->
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

    <section class="services" id="contact" style="margin-top: 90px;">
        <div class="container">
        <div class="card">
                <h3>REGULER</h3>
                <p>Party (Family/guest), Graduation, Bridesmaids (without retouch).</p>
                <p class="price">1. Make up & Hair Rp.400.000</p>
                <p class="price">2. Make up Rp.300.000</p>
                <p class="price">Kids &lt; 12thn :</p>
                <p class="price">3. Make up & Hair Rp.300.000</p>
                <ul class="price" style="text-align: justify;">
                    <li>Additional Facelift: + Rp 350.000</li>
                    <li>Include transport max 8km (u/ daerah tertentu ada tambahan biaya)</li>
                </ul>
            </div>

            <div class="card">
                <h3>ENGAGEMENT / SANGJIT / SWEET17</h3>
                <p>(without retouch).</p>
                <p class="price">1. Make up & Hair Rp.600.000</p>
                <p class="price">2. Make up Rp.450.000</p>
                <p class="price">Mother Bride / Groom :</p>
                <p class="price">3. Make up & Hair Rp.600.000</p>
                <p class="price">4. Make up Rp.450.000</p>
                <p class="price">Sister Bride / Groom :</p>
                <p class="price">5. Make up & Hair Rp.500.000</p>
                <p class="price">6. Make up Rp.400.000</p>
                <ul class="price" style="text-align: justify;">
                    <li>Additional Facelift: + Rp 350.000</li>
                    <li>Include transport max 8km (u/ daerah tertentu ada tambahan biaya)</li>
                </ul>
            </div>

            <div class="card">
                <h3>WEDDING (BRIDE & GROOM)</h3>
                <p class="price">1. Make up & Hairdo Rp.2.000.000 (without retouch)</p>
                <p class="price">2. Make up & Hairdo Rp.2.850.000 (without retouch)</p>
                <ul class="price"  style="text-align: left;">
                    <li>Get FREE test makeup for bride only (Tes makeup Location : @Studio Pasirkoja)</li>
                    <li>Get Free softlens for bride (Grey or Brown)</li>
                    <li>Get Free sheet mask for bride</li>
                    <li>Additional facelift + Rp500.000</li>
                    <li>Duration 4,5 jam</li>
                    <li>Hairdo by partner</li>
                </ul>
            </div>

            <div class="card">
                <h3>PRE-WED PHOTOSHOOT MATERNITY</h3>
                <p class="price">1. Make up & Hairdo Rp.750.000 (no retouch for makeup & hairdo)</p>
                <p class="price">2. Make up & Hairdo-Halfday Rp.1.000.000 (standby max until 12pm makeup & hairdo)</p>
                <p class="price">3. Make up & Hairdo-Fullday Rp.1.300.000 (standby max until 4pm makeup & hairdo)</p>
            </div>
        </div>
    </section>

    <section class="terms">
        <div class="container">
            <h2>Terms and Conditions</h2>
            <ul>
                <li>Booking / Tag Tanggal makeup dan hairdo wajib melakukan pembayaran: ~ DP 50% dari ketentuan harga yang akan dipesan (Min DP Rp. 200.000,-).</li>
                <li>Pelunasan H-5 / dapat dilakukan selambat-lambatnya H-1 pelaksanaan.</li>
                <li><b>PEMILIHAN SERVICE HARUS SESUAI DENGAN ACARA YG DILAKSANAKAN.</b> Apabila penggunaan jasa <b>TIDAK SESUAI</b> dengan acara kami berhak untuk menagih extra charge sesuai dengan price list makeup hairdo yang berlaku.</li>
                <li>Pembayaran Via Transfer ke rekening BCA a/n: Rzeliah Muliady.</li>
                <li>Reschedule hanya bisa dilakukan 1x disesuaikan dengan jadwal kosong dengan masa berlaku 6 bulan dari tanggal booking apabila beda tahun akan ada penyesuaian harga berikut dengan jadwal kosong yang tersedia.</li>
                <li>Jika melakukan <b>CANCEL</b> maka DP 50% akan hangus, dan apabila sudah melakukan tahap pelunasan maka akan kami kembalikan hanya sejumlah pelunasan.</li>
                <li>Harga sudah termasuk TRANSPORTASI maksimal 5Km terhitung dari studio pasirkoja. *Penambahan biaya transportasi Makeup dan Hair do : start from Rp 35.000 (Tergantung jarak lokasi client terhitung dari lokasi studio pasirkoja).</li>
                <li>Makeup service menggunakan gabungan produk Highend, Lokal & Drugstore.</li>
                <li>Portofolio dapat dilihat di Instagram : @Rzeliah_Mua.</li>
                <li>Dengan melakukan DP berarti menyetujui ketentuan di atas.</li>
            </ul>
        </div>
    </section>

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
