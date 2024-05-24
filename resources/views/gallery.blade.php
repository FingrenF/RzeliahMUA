<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rzeliah MUA | Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <style>
        .equal-images .row {
            display: flex;
            flex-wrap: wrap;
        }
        .equal-images .col-md-4 {
            flex: 1;
            margin-bottom: 20px; /* Optional: Adds some spacing between images */
        }
        .equal-images img {
            width: 100%;
            height: auto;
        }
        .navbar-brand img {
            max-width: 160px; /* Set maximum logo width */
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
    </style>
</head>
<body class="equal-images">
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
<div style="margin-bottom: 20px;"></div>
<div class="container" id="contact" style="margin-top: 90px;">
    <h1 class="text-center title">Rzeliah MUA's Gallery</h1>
    <div style="margin-bottom: 20px;"></div> <!-- Tambahkan jarak di sini -->
    
    @php
        $total_images = 32; // Change this to the total number of images you have
    @endphp

    @for ($i = 1; $i <= $total_images; $i++)
        @if (($i - 1) % 3 == 0)
            <div class="row">
        @endif
        <div class="col-md-4">
            <a href="images/portofolio/{{ $i }}.jpg" class="image-link">
                <img src="images/portofolio/{{ $i }}.jpg" alt="Gambar {{ $i }}">
            </a>
        </div>
        @if ($i % 3 == 0 || $i == $total_images)
            </div>
        @endif
    @endfor
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
