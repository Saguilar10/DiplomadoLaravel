@include('partials/header')

@include('partials/blocks/navigation', ["about" => "active"])

@include('partials/blocks/page-title', ['title' => 'Título de la página', 'description' => 'Descripción de la página'])

<!--==================================
=            Career Promo            =
===================================-->
<section class="section career-featured pt-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<!-- written-content -->
					<div class="content">
						<!-- Career heading -->
						<h2>Who we're looking for</h2>
						<!-- Career Description -->
						<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis</p>
					</div>
					<!-- Promo Video -->
					<div class="video">
						<!-- Video Thumb -->
						<img class="img-fluid shadow" src="images/thumbs/promo-video-thumbnail.jpg" alt="video-thumbnail">
						<!-- Video Button -->
						<div class="video-button video-box">
							<a href="javascript:void(0)">
								<i class="ti-control-play" data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Career Promo  ====-->

<!--=============================
=            Gallery            =
==============================-->
<section class="gallery">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-4">
				<div class="image">
					<img data-fancybox="gallery" href="images/gallery/gallery-01.jpg" class="img-fluid" src="images/gallery/gallery-01.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="image">
					<img data-fancybox="gallery" href="images/gallery/gallery-02.jpg" class="img-fluid" src="images/gallery/gallery-02.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="image">
					<img data-fancybox="gallery" href="images/gallery/gallery-03.jpg" class="img-fluid" src="images/gallery/gallery-03.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Gallery  ====-->

<!--===============================
=            Fun Facts            =
================================-->
<section class="company-fun-facts section">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Some amenities for you to enjoy</h2>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-timer"></i>
					<h3>Flexible hours</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-filter"></i>
					<h3>Free Snacks & Drinks</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-game"></i>
					<h3>Gaming</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-hummer"></i>
					<h3>4 Working Days</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Fun Facts  ====-->

<!--===============================
=            Job lists            =
================================-->
<section class="job-list section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 m-auto">
				<div class="block">
					<div class="title text-center">
						<h2>Job Opening</h2>
					</div>
					<!-- Job List -->
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>Andriod Developer</h3>
							<!-- Location -->
							<p>Hamburg, Germany</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
							@@include('blocks/job-description-modal.htm')
						</div>
					</div>
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>DevOps Engineer</h3>
							<!-- Location -->
							<p>London, United Kingdom</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
						</div>
					</div>
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>Operations Associate / Manager </h3>
							<!-- Location -->
							<p>New Jersey , USA</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
						</div>
					</div>
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>International Compliance Officer</h3>
							<!-- Location -->
							<p>New Jersey , USA</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Job lists  ====-->

@include('partials/blocks/footer-classic')

@include('partials/blocks/footer')