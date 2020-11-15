<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{url_for('static', filename='img/favicon-pmi.png')}}" type="image/png">
	<title>Palang Merah Indonesia -  Kabupaten Tulungagung</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{url_for('static', filename= 'css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename = 'vendor/linericon/style.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename = 'css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename= 'vendor/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename= 'css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename= 'vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename= 'vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{url_for('static', filename= 'vendors/flaticon/flaticon.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{url_for('static', filename= 'css/style.css')}}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="{{url_for('static', filename= 'img/logo-pmi.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="mobil-donor.html">Mobil Donor</a></li>
							<li class="nav-item"><a class="nav-link" href="stok-darah.html">Stock Darah</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.html">Tentang PMI</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Hubungi Kami</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="banner_content">
							<h2>
								Platform PMI <br>
								Data Donor Darah
							</h2>
							<p>
								Hai !!!
								Kami dari PMI mempunyai fitur baru untuk mengetahui data akurat tentang prediksi penyediaan data darah 
							</p>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="stok-darah.html"><span>Cek Sekarang</span></a>
								
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="home_right_img">
							<img class="img-fluid" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->


	<!--================Start Features Area =================-->
	<section class="section_gap features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<p class="top_title">Palang Merah Indonesia</p>
						<h2>Website Prediksi Pendonor Darah</h2>
						<p></p>
					</div>

					<div class="row justify-content-center">
                        <div class="col-lg-6 center">
                            <form class="row contact_form" action="{{ url_for('predict')}}" method="post" id="contactForm" novalidate="novalidate">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                                    </div>
                                </div>
							</form>
                        </div>
                	</div>
					
					<div class="row justify-content-center">
                        <div class="col-lg-6 center">
                            <form class="row contact_form" action="{{ url_for('predict')}}" method="post" id="contactForm" novalidate="novalidate">
                                <div class="col-md-12">
                                    <!-- <div class="form-group">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                                    </div> -->
                                    <div class="form-group" >
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Sebelumnya">
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="primary_btn"><span>Cek</span></button>
								</div>
							</form>
							<br>
								<div class="col-md-12">
                                    <div class="form-group" >
									<h4>Hasil Prediksi 4 Hari Kedepan</h4>
                                        {{prediction}}
                                    </div>
                                </div>
                        </div>
                </div>
				</div>

			</div>
		</div>
	</section>
	<!--================End Features Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>Tentang Kami</h3>
						</div>
						<p>Palang Merah Indonesia adalah sebuah organisasi perhimpunan nasional di Indonesia yang bergerak dalam bidang sosial kemanusiaan.</p>
						
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<script>
		function myfunction()
		document.getElementById("initable").style.display = "none"
	</script>
</body>

</html>