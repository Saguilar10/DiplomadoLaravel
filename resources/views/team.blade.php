@include('partials/header')

@include('partials/blocks/navigation', ["about" => "active"])

@include('partials/blocks/page-title', ['title' => 'Título de la página', 'description' => 'Descripción de la página'])

<!--==================================
=            Feature Team            =
===================================-->
<section class="founders section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				@include('partials/blocks/founder', [
					"img_src" 	=> "images/team/featured-person-01.jpg",
					"name"		=> "Elon Musk",
					"position"	=> "Founder & CEO",
					"description" => "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt."
				])
			</div>
			<div class="col-lg-6">
				@include('partials/blocks/founder', [
					"img_src" 	=> "images/team/featured-person-02.jpg",
					"name"		=> "Sergey Brin",
					"position"	=> "Founder & CEO",
					"description" => "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt."
				])
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Team  ====-->

<!--=================================
=            Design Team            =
==================================-->
<section class="design-team section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Design Team</h2>
					<p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> makes it easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				@include('partials/blocks/team-sm', [
					"img_src"		=> "images/team/design-team-01.jpg",
					"name"			=> "Jonathon Andrew",
					"position"		=> "Head Of Marketing",
					"description"	=> "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat."
				])
			</div>
			<div class="col-lg-4 col-md-6">
				@include('partials/blocks/team-sm', [
					"img_src"		=> "images/team/design-team-02.jpg",
					"name"			=> "Jonathon Andrew",
					"position"		=> "Head Of Marketing",
					"description"	=> "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat."
				])
			</div>
			<div class="col-lg-4 col-md-6">
				@include('partials/blocks/team-sm', [
					"img_src"		=> "images/team/design-team-03.jpg",
					"name"			=> "Jonathon Andrew",
					"position"		=> "Head Of Marketing",
					"description"	=> "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat."
				])
			</div>
		</div>
	</div>
</section>
<!--====  End of Design Team  ====-->

<!--=================================
=            Marketing Team         =
==================================-->
<section class="design-team section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Marketing Team</h2>
					<p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> makes it easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				@include('partials/blocks/team-sm', [
					"img_src"		=> "images/team/marketing-team-01.jpg",
					"name"			=> "Jonathon Andrew",
					"position"		=> "Head Of Marketing",
					"description"	=> "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat."
				])
			</div>
			<div class="col-lg-4 col-md-6">
				@include('partials/blocks/team-sm', [
					"img_src"		=> "images/team/marketing-team-02.jpg",
					"name"			=> "Jonathon Andrew",
					"position"		=> "Head Of Marketing",
					"description"	=> "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat."
				])
			</div>
			<div class="col-lg-4 col-md-6">
				@include('partials/blocks/team-sm', [
					"img_src"		=> "images/team/marketing-team-03.jpg",
					"name"			=> "Jonathon Andrew",
					"position"		=> "Head Of Marketing",
					"description"	=> "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat."
				])
			</div>
		</div>
	</div>
</section>
<!--====  End of Marketing Team  ====-->


<!--==================================
=            Feature Team            =
===================================-->
<section class="founders section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				@include('partials/blocks/founder', [
					"img_src" 	=> "images/team/featured-person-01.jpg",
					"name"		=> "Elon Musk",
					"position"	=> "Founder & CEO",
					"description" => "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt."
				])
			</div>
			<div class="col-lg-6">
				@include('partials/blocks/founder', [
					"img_src" 	=> "images/team/featured-person-02.jpg",
					"name"		=> "Sergey Brin",
					"position"	=> "Founder & CEO",
					"description" => "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt."
				])
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Team  ====-->

@include('partials/blocks/cta-hire')

@include('partials/blocks/footer-classic')

@include('partials/blocks/footer')