<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $wd = $_POST['wd'];
    $wb = $_POST['wb'];
    $asr = $_POST['asr'];
    
    // Format pesan yang akan dikirim melalui WhatsApp
    $pesan = "Nama: $nama\n";
    $pesan .= "Alamat: $alamat\n";
    $pesan .= "Email: $email\n";
    $pesan .= "Wedding Date: $wd\n";
    $pesan .= "Wedding Budget: $wb\n";
    $pesan .= "Any Special Request : $asr\n";
    
    // Nomor penerima WhatsApp
    $nomor_penerima = '6281267021782'; // Ganti dengan nomor penerima yang valid
    
    // Kirim pesan melalui WhatsApp menggunakan API WhatsApp Gateway
    $api_url = "https://api.whatsapp.com/send?phone=$nomor_penerima&text=" . urlencode($pesan);
    
    // Redirect ke URL WhatsApp Gateway
    header("Location: $api_url");
    exit;
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naura Pelaminan</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    <div class="menubar">
        <nav>
            <img src="logo.png"style="width:100px;height:100px;">
            <h2 class="logo" >NauraPelaminan</h2>
            
            <ul>
            <div id="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
    <script>
    // Ketika menu diklik
    $('#navbar a').on('click', function(e) {
      e.preventDefault();
      
      // Ambil target dari anchor menu
      var target = $(this).attr('href');
      
      // Animasikan scroll ke target
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);
      
      // Tambahkan kelas active ke anchor yang diklik
      $('#navbar a').removeClass('active');
      $(this).addClass('active');
    });
  </script>
            </div>
            </ul>
        </nav>
        <div class="content">
            <h4 id="home"></h4>
            <h1>Let's Plan Your </h1>
            <h1>Wedding Dream Togethers</h1>
        </div>

        <video autoplay loop muted plays-inline class="back-vidio">
            <source src="background.mp4" type="video/mp4">
        </video>  
    </div>

    <section class="about">
        <div class="text-overlay">
            <h1 id="aboutus">About Us</h1>
            <img src="about.png" style="width:500px;height:300px;" align="left">
            <div class="text-box">
                <h5>Let Us Introduce Ourselves as NauraPelaminan.</span></h5>
                <p>Lorem ipsum dolor sit amet consectur adipsicing elit. Rerum dolores alias porro quos, perferendis quo sequi illo officiis repellendus non? Beatae, nihil! Iure, sed impedit in excepturi error totam veniam.</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="content-slide">
            <h2 id="services">Our Services</h2>
            <div class="imgslide fade">
                <img src="paket1.png" alt="">
            </div>

            <div class="imgslide fade">
                <img src="paket2.png" alt="">
            </div>

            <div class="imgslide fade">
                <img src="paket3.png" alt="">
            </div>

            <div class="imgslide fade">
                <img src="paket4.png" alt="">
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
            <span class="dot" onClick="dotslide(4)"></span>
        </div>

    </section>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
            


        }
    </script>


    
    <section class="services">
        <div class="title">
            <h2 id="gallery">Gallery</h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fas fa-bars"></i>
                <h5> Pelaminan</h5>
                <a href="pelaminan.html" t>
                <img src="pelaminan.jpg" alt="pelaminan" width="80" border=0>
                
                </a>
            </div>

            <div class="card">
                <i class="fas fa-bars"></i>
                <h5> Tenda</h5>
                <a href="tenda.html" t>
                <img src="tenda.jpg" alt="tenda" width="80" border=0>
                
                </a>
            </div>

            <div class="card">
                <i class="fas fa-bars"></i>
                <h5> Make Up</h5>
                <a href="makeup.html" t>
                <img src="makeup1.jpg" alt="makeup" width="80" border=0>
                </a>
            </div>
            </div>
    </section>
        

    <section class="contact">
            <h2 id="contact">Contact Us</h2>

            <form method="POST" action="">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required><br>
        
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" required><br>
        
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>

                <label for="wd">Wedding Date:</label>
                <input type="date" name="wd" id="wd" required><br>

                <label for="wb">Wedding Budget:</label>
                <input type="text" name="wb" id="wb" required><br>

                <label for="asr">Any Special Request:</label>
                <input type="text" name="asr" id="asr" required><br>

                <button type="submit">Submit</button>
            </form>
    </section>

        

        <footer>
            <p>Naura Pelaminan Wedding Organizer</p>
            <p>Jorong Pincuran No.D.132, Kenagarian.Koto Tangah, Kec.Tilatang Kamang, Kab.Agam</p>
            <div class="social">
                <a href="#"><img src="fb.ico"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><img src="ig.ico"><i class="fab fa-instagram"></i></a>
                <a href="#"><img src="tw.ico"><i class="fab fa-twitter"></i></a>
            </div>
            <p class="end">2023 © NauraPelaminan</p>
        </footer>
</body>
</html>