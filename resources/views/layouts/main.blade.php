<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('theme/img/eggy/icon.png') }}" type="image/png">
	<title>Live Corona | Zethlabs Indonesia</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('/theme/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/theme/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/theme/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/theme/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/theme/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('/theme/vendors/nice-select/css/nice-select.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('/theme/css/style.css') }}">
</head>

<body>
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href=""><img width="250px;" src="{{ asset('theme/img/eggy/zethindo.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="#idn">Data Indonesia</a></li>
							<li class="nav-item"><a class="nav-link" href="#global">Data Global</a></li>
							<li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<section id="idn" class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h3>Data Corona Virus Indonesia</h3>
						<p class="text-center">Terakhir diperbaharui: {{ $date }} </p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img width="50%" src="{{ asset('theme/img/eggy/dna.png') }}" alt="">
						<h4>Indonesia</h4>
						<p></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img width="50%" src="{{ asset('theme/img/eggy/positif.png') }}" alt="">
						<h4>Positif</h4>
						<p>Jumlah : <b>{{ $positif }}</b> Orang</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img width="50%" src="{{ asset('theme/img/eggy/sembuh.png') }}" alt="">
						<h4>Sembuh</h4>
						<p>Jumlah : <b>{{ $sembuh }}</b> Orang</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img width="50%" src="{{ asset('theme/img/eggy/meninggal.png') }}" alt="">
						<h4>Meninggal</h4>
						<p>Jumlah : <b>{{ $meninggal }}</b> Orang</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--================ Global Data =================-->
	<section id="global" class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h3>Data Global Corona Virus</h3>
					</div>
				</div>
			</div>

			<div class="table-responsive-sm">
				<div class="main_title">
					<table id="global-data" class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Negara</th>
					      <th scope="col">Positif</th>
					      <th scope="col">Sembuh</th>
					      <th scope="col">Meninggal</th>
					    </tr>
					  </thead>
					  <tbody>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Global Data =================-->
	

	<!--================Footer Area =================-->
	<footer id="kontak" class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img width="250px;" src="{{ asset('theme/img/eggy/zethindo.png') }}" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="https://www.facebook.com/zeth.labs.5"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/zethlabs.id/"><i class="fa fa-instagram"></i></a>
							<a href="http://zethlabs.id/"><i class="fa fa-globe"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">Sumber data kawalcorona.com
					&copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> Created by <a href="http://zethlbas.id" target="_blank">Zethlabs Indonesia</a>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->

	<script src="{{ asset('/theme/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('/theme/js/popper.js') }}"></script>
	<script src="{{ asset('/theme/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/theme/js/stellar.js') }}"></script>
	<script src="{{ asset('/theme/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('/theme/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('/theme/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('/theme/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('/theme/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/theme/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('/theme/js/mail-script.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('theme/js/gmaps.min.js') }}"></script>
	<script src="{{ asset('theme/js/theme.js') }}"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
		    $('#global-data').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: '{!! route('data') !!}',
		        columns: [
		            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
		            { data: 'negara', name: 'negara', className: 'text-center' },
		            { data: 'positif', name: 'positif', className: 'text-center' },
		            { data: 'sembuh', name: 'sembuh', className: 'text-center' },
		            { data: 'meninggal', name: 'meninggal', className: 'text-center' }
		        ]
		    });
		} );
	</script>
</body>

</html>