@extends('landing.applanding')
@extends('landing.header')
@extends('landing.footer')

@section('addbeforecss')
<style>
    .clshdr {
    background-color: #f5f8fa;
    background-repeat: no-repeat;
    background-position: center top;
    background-size: 100% 300px;
    }
</style>
@endsection

@section('content')
<!-- begin:: Content -->
   <!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<!-- <div class="mb-0" id="home"> -->

				<!--begin::Wrapper-->
				<!-- <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom " > -->
					<!--begin::Header-->
                    <div class="clshdr"
                        style="background-image:url('assets/media/patterns/bg-head-blue.png');" >
					<!--end::Header-->
                        <!--begin::Toolbar-->
                        <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                            <!--begin::Container-->
                            <div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column me-3">
                                    <!--begin::Title-->
                                    <h1 class="d-flex text-white fw-bolder my-1 fs-2">Kontak Kami</h1>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-white opacity-75">
                                            <a href="../../demo2/dist/index.html" class="text-white text-hover-primary">Home</a>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-white opacity-75">Contact Us</li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-white opacity-75">Extended</li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page title-->

                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Toolbar-->

					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::FAQ card-->
							<div class="card">
								<!--begin::Body-->
								<div class="card-body p-lg-15">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row">
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 me-lg-20">
											<!--begin::Catigories-->
											<div class="mb-15">

												<!--begin::Menu-->

												<!--end::Menu-->
											</div>
											<!--end::Catigories-->
											<!--begin::Search blog-->

											<!--end::Search blog-->

										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid">
											<!--begin::Extended content-->
											<div class="mb-13">
												<!--begin::Content-->
												<div class="mb-15">
													<!--begin::Title-->
													<h4 class="fs-2x text-gray-800 w-bolder mb-6">Kontak Kami</h4>
													<!--end::Title-->
													<!--begin::Text-->
													<p class="fw-bold fs-4 text-gray-600 mb-2">Jl Medan Merdeka Selatan no 13</p>
													<!--end::Text-->
												</div>
												<!--end::Content-->
												<!--begin::Item-->
												<div class="mb-15">
													<!--begin::Title-->
													<h3 class="text-gray-800 w-bolder mb-4">Coming Soon</h3>
													<!--end::Title-->

												</div>
												<!--end::Item-->

												<!--begin::Item-->

												<!--end::Item-->
											</div>
											<!--end::Extended content-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Layout-->

								</div>
								<!--end::Body-->
							</div>
							<!--end::FAQ card-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->


				<!-- </div> -->
				<!--end::Wrapper-->
                    </div>  <!--end::clshdr-->
			    <!-- </div> -->
			<!--end::Header Section-->

		</div>
		<!--end::Main-->

    <!-- end:: Content -->
@endsection

@section('addafterjs')

@endsection
