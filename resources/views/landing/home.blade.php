@extends('landing.applanding')
@extends('landing.header')
@extends('landing.footer')

@section('addbeforecss')

@endsection

@section('content')
<!-- begin:: Content -->

    <!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                style="background-image:url('assets/media/illustrations/header-img.jpeg'); background-position: center;">

					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-20">
						<!--begin::Heading-->
						<div class="text-left mb-5 mb-lg-10 py-10 py-lg-20" style="background-image:url('assets/media/header/h1.png'); background-repeat: no-repeat;background-size: 63%;">
							<span style="color: white;" class="fs-4 subtext-head-sd">Seleksi Talent Board of Directors BUMN</span>
							<!--begin::Title-->
							<h1 class="text-white fw-bolder fs-4x fs-lg-5x mb-15 text-head-sd">Mari berkontribusi<br />untuk
							<span style="background: linear-gradient(to right, #b9daff 0%, #009ef7 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Negeri</span>
							</span></h1>
							<!--end::Title-->

						</div>
						<!--end::Heading-->

					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20" style="color: #e1e1e1;">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
					<div class="row mb-10">
						<div class="col-md-4 px-5">
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{ asset('assets/media/illustrations/process-2.png') }}" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
									<!--end::Badge-->

								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<!--end::Description-->
							</div>

						</div>
						<div class="col-md-8">
							<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Informasi Umum</h3>
							<p class="text-muted fs-6 fw-bold" style="line-height: 1.6;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets  containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus  PageMaker including versions of Lorem Ipsum.</p>
							<!--end::Title-->
							<!--begin::Text-->

							</div>
					</div>



				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<!--begin::Statistics Section-->
			<div class="mt-20" >
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color" style="color: #009ea9;">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-dark-bg">
					<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-12 mt-0">
						<!--begin::Title-->
						<h3 class="fs-2hx text-white mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Alur Proses Pengentrian</h3>
						<!--end::Title-->
						<!--begin::Sub-title-->
						<div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete, additional costs to
						<br />integrate and test each extra feature creeps up and haunts most of us.</div>
						<!--end::Sub-title=-->
					</div>
					<!--end::Heading-->
					<!--begin::Slider-->
					<div class="tns tns-default">
						<!--begin::Wrapper-->
						<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
							<!--begin::Item-->
							<div class="text-center">
								<!--begin::Photo-->
								<div class="sdw mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/step/1.png')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-white fw-bolder text-hover-primary fs-3">Pertama</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-bold mt-1">Regisrasi akun anda</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center">
								<!--begin::Photo-->
								<div class="sdw mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/step/2.png')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-white fw-bolder text-hover-primary fs-3">Kedua</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-bold mt-1">Lengkapi profil anda</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center">
								<!--begin::Photo-->
								<div class="sdw mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/step/3.png')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="#" class="text-white fw-bolder text-hover-primary fs-3">Ketiga</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-bold mt-1">Simpan dan Rilis CV anda</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->




						</div>
						<!--end::Wrapper-->
						<!--begin::Button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
							<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
							<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Button-->
					</div>
					<!--end::Slider-->
				</div>
				<!--end::Container-->

				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color" style="color: #172a5a;">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->
			<!--begin::Team Section-->
			<div class="py-10 py-lg-20">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-12">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Persyaratan</h3>
						<!--end::Title-->
						<!--begin::Sub-title-->
						<div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete, additional costs to
						<br />integrate and test each extra feature creeps up and haunts most of us.</div>
						<!--end::Sub-title=-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row g-10">
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Item-->
											<a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-23.jpg') }}">
												<!--begin::Image-->
												<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:{{ asset( 'assets/media/stock/600x600/img-23.jpg' ) }}"></div>
												<!--end::Image-->
												<!--begin::Action-->
												<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
													<i class="bi bi-eye-fill fs-3x text-white"></i>
												</div>
												<!--end::Action-->
											</a>
											<!--end::Item-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-6">
											<!--begin::Row-->
											<div class="row g-10 mb-10">
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Item-->
													<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-22.jpg') }} ">
														<!--begin::Image-->
														<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:{{ asset('assets/media/stock/600x600/img-22.jpg') }}"></div>
														<!--end::Image-->
														<!--begin::Action-->
														<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
															<i class="bi bi-eye-fill fs-3x text-white"></i>
														</div>
														<!--end::Action-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Item-->
													<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x600/img-21.jpg') }}">
														<!--begin::Image-->
														<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:{{ asset('assets/media/stock/600x600/img-21.jpg') }}"></div>
														<!--end::Image-->
														<!--begin::Action-->
														<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
															<i class="bi bi-eye-fill fs-3x text-white"></i>
														</div>
														<!--end::Action-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Item-->
											<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="{{ asset('assets/media/stock/600x400/img-20.jpg') }} ">
												<!--begin::Image-->
												<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:{{ asset('assets/media/stock/600x600/img-20.jpg') }}"></div>
												<!--end::Image-->
												<!--begin::Action-->
												<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
													<i class="bi bi-eye-fill fs-3x text-white"></i>
												</div>
												<!--end::Action-->
											</a>
											<!--end::Item-->
										</div>
										<!--end::Col-->
					</div>
									<!--end::Row-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Team Section-->


			<!--end::Persyaratan Section-->
            @extends('landing.footer')
		</div>
		<!--end::Main-->

    <!-- end:: Content -->
@endsection

@section('addafterjs')

<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript" src="{{asset('js/dashboard/index.js')}}"></script> -->
@endsection
