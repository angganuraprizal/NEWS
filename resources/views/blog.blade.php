<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NEWS</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	
	<!-- Favicons -->
	<link href="{{ asset('/img/news.png') }}" rel="icon">
	<link href="{{ asset('/devfolio/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
	
	<!-- Bootstrap CSS File -->
	<link href="{{ asset('/devfolio/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	
	<!-- Libraries CSS Files -->
	<link href="{{ asset('/devfolio/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/devfolio/lib/animate/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/devfolio/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/devfolio/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/devfolio/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
	
	<!-- Main Stylesheet File -->
	<link href="{{ asset('/devfolio/css/style.css') }}" rel="stylesheet">
	
	<!-- =======================================================
	Theme Name: DevFolio
	Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
	Author: BootstrapMade.com
	License: https://bootstrapmade.com/license/
	======================================================= -->
</head>
<body>
	<!--/ Nav Star /-->
	<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll" href="{{ url('/') }}">NEWS</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
				aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span></span>
			<span></span>
			<span></span>
			</button>
			<div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link js-scroll" href="{{ url('/') }}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll" href="#blog">Blog</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/ Nav End /-->

	<!--/ Intro Skew Star /-->
	<div id="home" class="intro intro-single route bg-image" style="background-image: url(devfolio/img/overlay-bg.jpg)">
		<div class="overlay-mf"></div>
		<div class="intro-content display-table">
			<div class="table-cell">
				<div class="container">
					<h2 class="intro-title mb-4">News</h2>
					<ol class="breadcrumb d-flex justify-content-center">
						<li class="breadcrumb-item">
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li class="breadcrumb-item active">News</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--/ Intro Skew End /-->

	<!--/ Section Blog Star /-->
	<section id="blog" class="blog-mf sect-pt4 route">
		<div class="container">
			<div class="row">
				@foreach($artikels as $data)
				<div class="col-md-4">
					<div class="card card-blog">
						<div class="card-img">
							<a href="/blog/{{$data->slug}}"><img src="{{ $data->foto }}" alt="" class="img-fluid"></a>
						</div>
						<div class="card-body">
							<div class="card-category-box">
								<div class="card-category">
									<h6 class="category">{{ $data->kategori->nama }}</h6>
								</div>
							</div>
							<h3 class="card-title"><a href="/blog/{{$data->slug}}">{{ $data->judul}}</a></h3>
							<p class="card-description">
								{!! str_limit($data->isi) !!}
							</p>
						</div>
						<div class="card-footer">
							<div class="post-date">
								<span class="ion-ios-clock-outline"></span> {{ $data->created_at }}
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="pull-right">
						{{ $artikels->links() }}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ Section Blog End /-->

	<!--/ Section Contact-Footer Star /-->
	<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(devfolio/img/overlay-bg.jpg)">
		<div class="overlay-mf"></div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="copyright-box">
							<p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
							<div class="credits">
								<!--
									All the links in the footer should remain intact.
									You can delete the links only if you purchased the pro version.
									Licensing information: https://bootstrapmade.com/license/
									Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
									-->
								Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	<!--/ Section Contact-footer End /-->

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<div id="preloader"></div>
	
	<!-- JavaScript Libraries -->
	<script src="{{ asset('/devfolio/lib/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/popper/popper.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/easing/easing.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/counterup/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/counterup/jquery.counterup.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/owlcarousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/lightbox/js/lightbox.min.js') }}"></script>
	<script src="{{ asset('/devfolio/lib/typed/typed.min.js') }}"></script>
	<!-- Contact Form JavaScript File -->
	<script src="{{ asset('/devfolio/contactform/contactform.js') }}"></script>
	
	<!-- Template Main Javascript File -->
	<script src="{{ asset('/devfolio/js/main.js') }}"></script>

</body>
</html>