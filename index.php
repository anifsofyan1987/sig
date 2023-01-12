<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIG KAB. REMBANG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                   
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"><a class="text-secondary" href="">curah hujan di Kabupaten Rembang</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">Bencana banjir terbanyak di kecamatan Pamotan</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
 <?php 
 
echo date('l, d-m-Y');
?>
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Sistem Informasi Geografis</span></br>Curah Hujan dan Banjir Kab. Rembang</h1>
                </a>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">SIG</span>KAB. Rembang</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Beranda</a>
                    <a href="latar.php" class="nav-item nav-link">Latar Belakang</a>
                    <a href="dasar.php" class="nav-item nav-link">Dasar Teori</a>
                    <a href="rancang.php" class="nav-item nav-link">Perancangan</a>

                    <a href="contact.php" class="nav-item nav-link ">Kontak</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="#">Home</a>
                <span class="breadcrumb-item active">Home</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Peta kabupaten Rembang</h3>
				
                            <iframe src="siga/index.html" height="435" width="100%" scrolling="yes" title="Iframe Example"  ></iframe>
							
                            
                       
            </div>
            
                <div class="bg-light py-2 px-4 mb-3">
                    <div class="bg-light mb-3" style="padding: 30px;">
                        
                       <p>&nbsp;
</p>
<p><strong>A. Pemetaan Bencana banjir per Kecamatan</strong>
</p>
<p>Data yang diperoleh dari BPS Kabupaten rembang kemudian diinput kedalam sistem, diperoleh hasil sebagain berikut.
</p>
<iframe src="sigbencana/index.html" height="435" width="60%" scrolling="yes" title="Iframe Example"  ></iframe>
<p>&nbsp;
</p>
<p>Dari hasil table di atas kemudian divisualisaikan ke dalam peta . Semakin gelap warna menjukkan semakin banyaknya kejadian banjir di tahun 2020, peringkat pertama ditempati oleh kecamatan Pamotan dan kragan yakni 3 kali banjir, kemudian lasem dan sluke dengan 2 kali banjir, sedangkan kecamatan Rembang, Sulang, Sale,Sarang hanya mengalami 1 kali bencana banjir. Kecamatan Sedan, Pancur, Kaliori, Sumber, dan Gunem tidak pernah mengalami bencana Banjir.
</p>
<p>B. Pemetaan Curah Hujan Tiap Kecamatan
</p>
<p>Data curah hujan pada tahun 2020 yang diperoleh dari website BPS kabupaten Rembang, Dari data tersebut kemudian divisualkan di dalam peta di bwah ini. Warna semakin gelap menunjukkan curah hujan yang semakin tinggi.
</p>
<p><iframe src="sigcurah/index.html" height="435" width="60%" scrolling="yes" title="Iframe Example"  ></iframe>
</p>
<p>&nbsp;
</p>
<p>C. Analisis hubungan Curah Hujan dan Banjir
</p>
<p>&nbsp;
</p>
<p style="margin:0cm"><span style="background:#fefefe">Dari kedua Peta diatas kitab bisa melihat semakin banyak curah hujan potensi bencana banjir akan semakin tinggi. Contohnya adalah kecamatan pamotan, dengan curah hujan yang cukup tinggi terjadi banjir 3 kali dalam satu tahun. Potensi banjir semakin tinggi di daerah tersebut juga diakibatkan karena kecamatan pamotan dikelilingi oleh pegunungan Lasem, sehingga air hujan akan lambat mengalir ke Laut.</span>
</p>
<p style="margin:0cm; text-align:justify"><span style="background:#fefefe">yang tinggi sangat berpengaruh terhadap potensi bencana banjir di suatu wilayah. Sebagian besar kasus banjir yang terjadi di seluruh dunia disebabkan oleh kondisi ini. Hujan yang ringan juga dapat menyebabkan banjir, tergantung pada kadar air tanah. </span>
</p>
<p style="margin:0cm; text-align:start; -webkit-text-stroke-width:0px"><span style="background:#fefefe"><span style="box-sizing:border-box"><span style="font-variant-ligatures:normal"><span style="font-variant-caps:normal"><span style="orphans:2"><span style="widows:2"><span style="text-decoration-thickness:initial"><span style="text-decoration-style:initial"><span style="text-decoration-color:initial"><span style="word-spacing:0px">Mengutip dari laman Climate Central, hujan yang lebih deras merupakan salah satu tanda perubahan iklim. Hal ini dapat terjadi saat atmosfer menghangat, sehingga lebih banyak air yang menguap dari tanah, tanaman, danau, dan lautan.</span></span></span></span></span></span></span></span></span></span>
</p>
<p><span style="background:#fefefe"><span style="box-sizing:border-box"><span style="font-variant-ligatures:normal"><span style="font-variant-caps:normal"><span style="orphans:2"><span style="widows:2"><span style="text-decoration-thickness:initial"><span style="text-decoration-style:initial"><span style="text-decoration-color:initial"><span style="word-spacing:0px">Untuk setiap tambahan 1&deg;F pemanasan, atmosfer mampu menahan tambahan 4 persen uap air. Jadi, ketika uap air tambahan ini mengembun menjadi presipitasi, itu menyebabkan hujan yang lebih deras.</span></span></span></span></span></span></span></span></span></span>
</p>
<p>Curah hujan yang tinggi dapat memperluas zona risiko ke daerah yang sebelumnya aman dari banjir. Selain itu, kondisi ini juga meningkatkan erosi dan limpasan, menghilangkan lapisan tanah atas pertanian dan meningkatkan aliran polutan ke saluran air.
</p>
<p>&nbsp;
</p>
<p>&nbsp;
</p>



                    </div>
                </div>

            
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->

    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Anif Sofyan Purwanto</a>.22676008. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			kelas <a class="font-weight-bold" href="#">5C</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>