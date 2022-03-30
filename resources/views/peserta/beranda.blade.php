@extends('landing.applanding')
@extends('peserta.header')

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
                        style="background-image:url( {{ url('assets/media/patterns/bg-head-blue.png') }} );" >
					<!--end::Header-->
                        <!--begin::Toolbar-->
                        <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                            <!--begin::Container-->
                            <div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column me-3">
                                    <!--begin::Title-->
                                    <h1 class="d-flex text-white fw-bolder my-1 fs-2">{{ $pagetitle }}</h1>
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

										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid">
											<!--begin::Extended content-->
                                            <!--begin::Title-->
                                            <h4 class="fs-2x text-gray-800 w-bolder mb-10">Selamat Datang</h4>
                                            <!--end::Title-->
                                            <div class="row g-0">
													<!--begin::Col-->
													<div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
														<!--begin::Svg Icon | path: icons/duotone/Media/Equalizer.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
																	<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
																	<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
																	<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
														<a href="#" class="text-warning fw-bold fs-6">Weekly Sales</a>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
														<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
														<a href="#" class="text-primary fw-bold fs-6">New Users</a>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Content-->


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
