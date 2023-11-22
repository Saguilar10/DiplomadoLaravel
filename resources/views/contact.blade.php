@include('partials/header')

@include('partials/blocks/navigation', ["contact" => "active"])

@include('partials/blocks/page-title', ["title" => 'Título de la página', 'description' => 'Descripción de la página'])

<!--=====================================
=            Address and Map            =
======================================-->
<section class="address">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 align-self-center">
				<div class="block">
					<div class="address-block text-center mb-5">
						<div class="icon">
							<i class="ti-mobile"></i>
						</div>
						<div class="details">
							<h3>(00) 789 456 7890 (USA)</h3>
							<h3>(88) 016 725 0455 (UK)</h3>
						</div>
					</div>
					<div class="address-block text-center">
						<div class="icon">
							<i class="ti-map-alt"></i>
						</div>
						<div class="details">
							<h3>36. St Michael’s St, Oxford OX1, UK</h3>
							<h3>123, Pennsylvania, USA</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-5 mt-lg-0">
				<div class="google-map">
					<!-- Google Map -->
					<div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Address and Map  ====-->
<section class="contact-form section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5 text-center">Drop us a mail</h2>
			</div>
			<div class="col-12">
				<form action="">
					<div class="row">
						<!-- Name -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" placeholder="Name" required>
						</div>
						<!-- Email -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="email" placeholder="Your Email Address" required>
						</div>
						<!-- subject -->
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" placeholder="Subject" required>
						</div>
						<!-- Message -->
						<div class="col-md-12 mb-2">
							<textarea class="form-control main" name="message" rows="10" placeholder="Your Message"></textarea>
						</div>
						<!-- Submit Button -->
						<div class="col-12 text-right">
							<button class="btn btn-main-md">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@include('partials/blocks/footer-classic')

@include('partials/blocks/footer')