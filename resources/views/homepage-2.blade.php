@include('partials/header')

@include('partials/blocks/navigation', ["home" => "active"])

<!--============================
=            Banner            =
=============================-->
<div class="section banner-full">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 justify-content-xs-center">
				<div class="image" data-aos="flip-right">
					<img class="img-fluid" src="images/feature/iphone-black.jpg" alt="Iphone-Black">
				</div>
			</div>
			<div class="col-lg-8 align-self-center">
				<div class="block">
					<div class="logo">
						<a href="/"><img src="images/logo.png" alt="logo"></a>
					</div>
					<h1>Introducing Game Changing
						<br>Lifestyle Apps</h1>
					<p>
						The simple, intuitive app that makes it easy
						<br>to make happy, manage your lifestyle,
						<br>and work balances faster.
					</p>
					<ul class="list-inline app-badge">
						<li class="list-inline-item">
							<a href="#"><img src="images/app/appple-store.jpg" alt="Apple Store"></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><img src="images/app/google-play.jpg" alt="Google Play"></a>
						</li>
					</ul>
					<div class="support">
						<img class="img-fluid" src="images/icons/supported-services.png" alt="supported-services">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--====  End of Banner  ====-->

@include('partials/blocks/footer-classic')

@include('partials/blocks/footer')