{{-- Puxando o layout --}}
@extends('layouts.layout')

{{-- Mudando o título da página dinamicamente --}}
@section('view-title', 'Teatro Dona Zenaide')

{{-- Conteúdo da página --}}
@section('content')
    
    {{-- * Hero Section * --}}


	<div id="page" class="site">
		<div id="content" class="site-content">
			<main id="main" class="site-main" role="main">
				<section id="hero" class="section-slider screenr-section swiper-slider full-screen fixed">
					<div class="swiper-container" data-autoplay="7000">
						<div class="swiper-wrapper">
							<div class="swiper-slide slide-align-left slide_content slide_content_layout_1"
								style="background-image: url('https://www.autoescolacaleffi.com.br/wp-content/uploads/2024/05/2023-12-11-1.jpg')">
								<div class="swiper-slide-intro">
									<div class="swiper-intro-inner">
										<p><img decoding="async" class="logo1"
												src="https://www.autoescolacaleffi.com.br/wp-content/uploads/2024/05/logo1-4.svg">
										</p>
										<h1><b>PIONEIRISMO </b><span style="font-weight:400"><br />E </span><b>
												<font color="#f68029">INCLUSÃO</font>
										</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
		</div><!-- #page -->



		<script type="text/javascript"
			src="https://www.autoescolacaleffi.com.br/wp-content/themes/screenr/assets/js/plugins.js?ver=4.0.0"
			id="screenr-plugin-js"></script>

		<script type="text/javascript" id="screenr-theme-js-extra">
			/* <![CDATA[ */
			var Screenr = { "ajax_url": "https:\/\/www.autoescolacaleffi.com.br\/wp-admin\/admin-ajax.php", "full_screen_slider": "1", "header_layout": "transparent", "slider_parallax": "1", "is_home_front_page": "1", "autoplay": "7000", "speed": "700", "effect": "slide", "gallery_enable": "1" };
			/* ]]> */
		</script>
		<script type="text/javascript"
			src="https://www.autoescolacaleffi.com.br/wp-content/themes/screenr/assets/js/theme.js?ver=20120206"
			id="screenr-theme-js"></script>





@endsection