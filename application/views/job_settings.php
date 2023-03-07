<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../" />
	<title>Settings - Employee Portal</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="<?php echo base_url() ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
									<!--begin::Title-->
									<h1 class="page-heading d-flex text-dark fw-bold fs-1 flex-column justify-content-center my-0">Settings</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Jobs</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Settings</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Filter menu-->
									<div class="m-0">
										<!--begin::Menu toggle-->
										<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
											<span class="svg-icon svg-icon-6 svg-icon-muted me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->Filter</a>
										<!--end::Menu toggle-->
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_63de6bef13965">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bold">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-semibold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_63de6bef13965" data-allow-clear="true" data-select2-id="select2-data-7-aoli" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option data-select2-id="select2-data-9-o463"></option>
															<option value="1">Approved</option>
															<option value="2">Pending</option>
															<option value="2">In Process</option>
															<option value="2">Rejected</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-d1gz" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fxcn-container" aria-controls="select2-fxcn-container"><span class="select2-selection__rendered" id="select2-fxcn-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-semibold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1">
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2" checked="checked">
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-semibold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
									</div>
									<!--end::Filter menu-->
									<!--begin::Secondary button-->
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Card-->
								<div class="col-xl-12">
									<div class="card card-flush">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin:::Tabs-->
											<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15" role="tablist">
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general" aria-selected="true" role="tab">
														<!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
														<!--end::Svg Icon-->General</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store" aria-selected="false" role="tab" tabindex="-1">
														<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
														Team</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization" aria-selected="false" role="tab" tabindex="-1">
														<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
														Profile</a>
												</li>
												<!--end:::Tab item-->
												
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												<div class="tab-pane fade active show" id="kt_ecommerce_settings_general" role="tabpanel">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>General Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Meta Title</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the title of the store for SEO." data-bs-original-title="Set the title of the store for SEO." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="meta_title" value="">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Meta Tag Description</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the description of the store for SEO." data-bs-original-title="Set the description of the store for SEO." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="meta_description"></textarea>
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Meta Keywords</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set keywords for the store separated by a comma." data-bs-original-title="Set keywords for the store separated by a comma." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<tags class="tagify form-control form-control-solid tagify--noTags tagify--empty" tabindex="-1">
																	<span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
																	&ZeroWidthSpace;
																</tags><input type="text" class="form-control form-control-solid" name="meta_keywords" value="" data-kt-ecommerce-settings-type="tagify" tabindex="-1">
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Theme</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set theme style for the store." data-bs-original-title="Set theme style for the store." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="w-100">
																	<!--begin::Select2-->
																	<select class="form-select form-select-solid select2-hidden-accessible" name="theme" data-control="select2" data-hide-search="true" data-placeholder="Select a layout" data-select2-id="select2-data-10-ju29" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option></option>
																		<option value="Default" selected="selected" data-select2-id="select2-data-12-0x4b">Default</option>
																		<option value="Minimalist">Minimalist</option>
																		<option value="Dark">Dark</option>
																		<option value="High_Contrast">High Contrast</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-w1di" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-theme-lf-container" aria-controls="select2-theme-lf-container"><span class="select2-selection__rendered" id="select2-theme-lf-container" role="textbox" aria-readonly="true" title="Default">Default</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select2-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Default Layout</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set default layout style for the store." data-bs-original-title="Set default layout style for the store." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="w-100">
																	<!--begin::Select2-->
																	<select class="form-select form-select-solid select2-hidden-accessible" name="layout" data-control="select2" data-hide-search="true" data-placeholder="Select a layout" data-select2-id="select2-data-13-vk8x" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option></option>
																		<option value="Default" selected="selected" data-select2-id="select2-data-15-h2fb">Default</option>
																		<option value="Electronics">Electronics</option>
																		<option value="Fashion">Fashion</option>
																		<option value="Home">Home</option>
																		<option value="Dining">Dining</option>
																		<option value="Interior">Interior</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-1bgs" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-layout-nk-container" aria-controls="select2-layout-nk-container"><span class="select2-selection__rendered" id="select2-layout-nk-container" role="textbox" aria-readonly="true" title="Default">Default</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select2-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Action buttons-->
														<div class="row py-5">
															<div class="col-md-9 offset-md-3">
																<div class="d-flex">
																	<!--begin::Button-->
																	<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
															</div>
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_store" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Store Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Store Name</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the name of the store" data-bs-original-title="Set the name of the store" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="store_name" value="">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Store Owner</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the store owner's name" data-bs-original-title="Set the store owner's name" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="store_owner" value="">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Address</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the store's full address." data-bs-original-title="Set the store's full address." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="store_address"></textarea>
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Geocode</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the store geocode manually (optional)" data-bs-original-title="Enter the store geocode manually (optional)" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="store_geocode" value="">
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Email</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="email" class="form-control form-control-solid" name="store_email" value="">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Phone</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="store_phone" value="">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Fax</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="store_fax" value="">
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Action buttons-->
														<div class="row py-5">
															<div class="col-md-9 offset-md-3">
																<div class="d-flex">
																	<!--begin::Button-->
																	<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
															</div>
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_localization" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Localization Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Country</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Select2-->
																<select id="kt_ecommerce_localization_country" class="form-select form-select-solid select2-hidden-accessible" name="localization_country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country" data-select2-id="select2-data-kt_ecommerce_localization_country" tabindex="-1" aria-hidden="true">
																	<option data-select2-id="select2-data-137-166k"></option>
																	<option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
																	<option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option>
																	<option value="AL" data-kt-select2-country="assets/media/flags/albania.svg">Albania</option>
																	<option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">Algeria</option>
																	<option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg">American Samoa</option>
																	<option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">Andorra</option>
																	<option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">Angola</option>
																	<option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">Anguilla</option>
																	<option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
																	<option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">Argentina</option>
																	<option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">Armenia</option>
																	<option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">Aruba</option>
																	<option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">Australia</option>
																	<option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">Austria</option>
																	<option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">Azerbaijan</option>
																	<option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">Bahamas</option>
																	<option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">Bahrain</option>
																	<option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">Bangladesh</option>
																	<option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">Barbados</option>
																	<option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">Belarus</option>
																	<option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">Belgium</option>
																	<option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">Belize</option>
																	<option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">Benin</option>
																	<option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">Bermuda</option>
																	<option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan</option>
																	<option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
																	<option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
																	<option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
																	<option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">Botswana</option>
																	<option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">Brazil</option>
																	<option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
																	<option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">Brunei Darussalam</option>
																	<option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">Bulgaria</option>
																	<option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">Burkina Faso</option>
																	<option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">Burundi</option>
																	<option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">Cambodia</option>
																	<option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">Cameroon</option>
																	<option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
																	<option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">Cape Verde</option>
																	<option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg">Cayman Islands</option>
																	<option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg">Central African Republic</option>
																	<option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">Chad</option>
																	<option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">Chile</option>
																	<option value="CN" data-kt-select2-country="assets/media/flags/china.svg">China</option>
																	<option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg">Christmas Island</option>
																	<option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
																	<option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">Colombia</option>
																	<option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">Comoros</option>
																	<option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">Cook Islands</option>
																	<option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">Costa Rica</option>
																	<option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
																	<option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">Croatia</option>
																	<option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">Cuba</option>
																	<option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">Curaçao</option>
																	<option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg">Czech Republic</option>
																	<option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">Denmark</option>
																	<option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">Djibouti</option>
																	<option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">Dominica</option>
																	<option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg">Dominican Republic</option>
																	<option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">Ecuador</option>
																	<option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">Egypt</option>
																	<option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">El Salvador</option>
																	<option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
																	<option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">Eritrea</option>
																	<option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">Estonia</option>
																	<option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">Ethiopia</option>
																	<option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
																	<option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">Fiji</option>
																	<option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">Finland</option>
																	<option value="FR" data-kt-select2-country="assets/media/flags/france.svg">France</option>
																	<option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg">French Polynesia</option>
																	<option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">Gabon</option>
																	<option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">Gambia</option>
																	<option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">Georgia</option>
																	<option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">Germany</option>
																	<option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">Ghana</option>
																	<option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">Gibraltar</option>
																	<option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">Greece</option>
																	<option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">Greenland</option>
																	<option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">Grenada</option>
																	<option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">Guam</option>
																	<option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">Guatemala</option>
																	<option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">Guernsey</option>
																	<option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">Guinea</option>
																	<option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
																	<option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">Haiti</option>
																	<option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
																	<option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">Honduras</option>
																	<option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong Kong</option>
																	<option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">Hungary</option>
																	<option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">Iceland</option>
																	<option value="IN" data-kt-select2-country="assets/media/flags/india.svg">India</option>
																	<option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
																	<option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
																	<option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">Iraq</option>
																	<option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">Ireland</option>
																	<option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">Isle of Man</option>
																	<option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">Israel</option>
																	<option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">Italy</option>
																	<option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">Jamaica</option>
																	<option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">Japan</option>
																	<option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">Jersey</option>
																	<option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">Jordan</option>
																	<option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">Kazakhstan</option>
																	<option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">Kenya</option>
																	<option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">Kiribati</option>
																	<option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
																	<option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait</option>
																	<option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
																	<option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
																	<option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">Latvia</option>
																	<option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">Lebanon</option>
																	<option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">Lesotho</option>
																	<option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">Liberia</option>
																	<option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">Libya</option>
																	<option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">Liechtenstein</option>
																	<option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">Lithuania</option>
																	<option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">Luxembourg</option>
																	<option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">Macao</option>
																	<option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">Madagascar</option>
																	<option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">Malawi</option>
																	<option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
																	<option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">Maldives</option>
																	<option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">Mali</option>
																	<option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">Malta</option>
																	<option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg">Marshall Islands</option>
																	<option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">Martinique</option>
																	<option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">Mauritania</option>
																	<option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">Mauritius</option>
																	<option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">Mexico</option>
																	<option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
																	<option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">Moldova, Republic of</option>
																	<option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">Monaco</option>
																	<option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">Mongolia</option>
																	<option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">Montenegro</option>
																	<option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">Montserrat</option>
																	<option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">Morocco</option>
																	<option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">Mozambique</option>
																	<option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">Myanmar</option>
																	<option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">Namibia</option>
																	<option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">Nauru</option>
																	<option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">Nepal</option>
																	<option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">Netherlands</option>
																	<option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">New Zealand</option>
																	<option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">Nicaragua</option>
																	<option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">Niger</option>
																	<option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">Nigeria</option>
																	<option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">Niue</option>
																	<option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg">Norfolk Island</option>
																	<option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
																	<option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">Norway</option>
																	<option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">Oman</option>
																	<option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">Pakistan</option>
																	<option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">Palau</option>
																	<option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
																	<option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">Panama</option>
																	<option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
																	<option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">Paraguay</option>
																	<option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">Peru</option>
																	<option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">Philippines</option>
																	<option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">Poland</option>
																	<option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">Portugal</option>
																	<option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">Puerto Rico</option>
																	<option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">Qatar</option>
																	<option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">Romania</option>
																	<option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">Russian Federation</option>
																	<option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda</option>
																	<option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">Saint Barthélemy</option>
																	<option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
																	<option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint Lucia</option>
																	<option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
																	<option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
																	<option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">Samoa</option>
																	<option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">San Marino</option>
																	<option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
																	<option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
																	<option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">Senegal</option>
																	<option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">Serbia</option>
																	<option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">Seychelles</option>
																	<option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">Sierra Leone</option>
																	<option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
																	<option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
																	<option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">Slovakia</option>
																	<option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">Slovenia</option>
																	<option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg">Solomon Islands</option>
																	<option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">Somalia</option>
																	<option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">South Africa</option>
																	<option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">South Korea</option>
																	<option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">South Sudan</option>
																	<option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">Spain</option>
																	<option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri Lanka</option>
																	<option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">Sudan</option>
																	<option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">Suriname</option>
																	<option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">Swaziland</option>
																	<option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">Sweden</option>
																	<option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">Switzerland</option>
																	<option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">Syrian Arab Republic</option>
																	<option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
																	<option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">Tajikistan</option>
																	<option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
																	<option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">Thailand</option>
																	<option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">Togo</option>
																	<option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">Tokelau</option>
																	<option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">Tonga</option>
																	<option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
																	<option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">Tunisia</option>
																	<option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">Turkey</option>
																	<option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg">Turkmenistan</option>
																	<option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
																	<option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu</option>
																	<option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">Uganda</option>
																	<option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">Ukraine</option>
																	<option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
																	<option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg">United Kingdom</option>
																	<option value="US" data-kt-select2-country="assets/media/flags/united-states.svg">United States</option>
																	<option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">Uruguay</option>
																	<option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">Uzbekistan</option>
																	<option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">Vanuatu</option>
																	<option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
																	<option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">Vietnam</option>
																	<option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg">Virgin Islands</option>
																	<option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">Yemen</option>
																	<option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">Zambia</option>
																	<option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">Zimbabwe</option>
																</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-136-wjyw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_localization_country-container" aria-controls="select2-kt_ecommerce_localization_country-container"><span class="select2-selection__rendered" id="select2-kt_ecommerce_localization_country-container" role="textbox" aria-readonly="true" title="Select a country"><span class="select2-selection__placeholder">Select a country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																<!--end::Select2-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Language</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="w-100">
																	<!--begin::Select2-->
																	<select class="form-select form-select-solid select2-hidden-accessible" name="localization_language" data-control="select2" data-placeholder="Select a language" data-select2-id="select2-data-16-3ebe" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option data-select2-id="select2-data-18-hbeo"></option>
																		<option value="id">Bahasa Indonesia - Indonesian</option>
																		<option value="msa">Bahasa Melayu - Malay</option>
																		<option value="ca">Català - Catalan</option>
																		<option value="cs">Čeština - Czech</option>
																		<option value="da">Dansk - Danish</option>
																		<option value="de">Deutsch - German</option>
																		<option value="en">English</option>
																		<option value="en-gb">English UK - British English</option>
																		<option value="es">Español - Spanish</option>
																		<option value="fil">Filipino</option>
																		<option value="fr">Français - French</option>
																		<option value="ga">Gaeilge - Irish (beta)</option>
																		<option value="gl">Galego - Galician (beta)</option>
																		<option value="hr">Hrvatski - Croatian</option>
																		<option value="it">Italiano - Italian</option>
																		<option value="hu">Magyar - Hungarian</option>
																		<option value="nl">Nederlands - Dutch</option>
																		<option value="no">Norsk - Norwegian</option>
																		<option value="pl">Polski - Polish</option>
																		<option value="pt">Português - Portuguese</option>
																		<option value="ro">Română - Romanian</option>
																		<option value="sk">Slovenčina - Slovak</option>
																		<option value="fi">Suomi - Finnish</option>
																		<option value="sv">Svenska - Swedish</option>
																		<option value="vi">Tiếng Việt - Vietnamese</option>
																		<option value="tr">Türkçe - Turkish</option>
																		<option value="el">Ελληνικά - Greek</option>
																		<option value="bg">Български език - Bulgarian</option>
																		<option value="ru">Русский - Russian</option>
																		<option value="sr">Српски - Serbian</option>
																		<option value="uk">Українська мова - Ukrainian</option>
																		<option value="he">עִבְרִית - Hebrew</option>
																		<option value="ur">اردو - Urdu (beta)</option>
																		<option value="ar">العربية - Arabic</option>
																		<option value="fa">فارسی - Persian</option>
																		<option value="mr">मराठी - Marathi</option>
																		<option value="hi">हिन्दी - Hindi</option>
																		<option value="bn">বাংলা - Bangla</option>
																		<option value="gu">ગુજરાતી - Gujarati</option>
																		<option value="ta">தமிழ் - Tamil</option>
																		<option value="kn">ಕನ್ನಡ - Kannada</option>
																		<option value="th">ภาษาไทย - Thai</option>
																		<option value="ko">한국어 - Korean</option>
																		<option value="ja">日本語 - Japanese</option>
																		<option value="zh-cn">简体中文 - Simplified Chinese</option>
																		<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-v7rw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-localization_language-gw-container" aria-controls="select2-localization_language-gw-container"><span class="select2-selection__rendered" id="select2-localization_language-gw-container" role="textbox" aria-readonly="true" title="Select a language"><span class="select2-selection__placeholder">Select a language</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select2-->
																</div>
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Currency</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="w-100">
																	<!--begin::Select2-->
																	<select class="form-select form-select-solid select2-hidden-accessible" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a currency" data-select2-id="select2-data-19-ejy6" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option data-select2-id="select2-data-21-g7jx"></option>
																		<option value="USD">US Dollar</option>
																		<option value="Euro">Euro</option>
																		<option value="Pound">Pound</option>
																		<option value="AUD">Australian Dollar</option>
																		<option value="JPY">Japanese Yen</option>
																		<option value="KRW">Korean Won</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-u4e5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-localization_currency-7s-container" aria-controls="select2-localization_currency-7s-container"><span class="select2-selection__rendered" id="select2-localization_currency-7s-container" role="textbox" aria-readonly="true" title="Select a currency"><span class="select2-selection__placeholder">Select a currency</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select2-->
																</div>
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Length Class</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the unit measurement for length." data-bs-original-title="Set the unit measurement for length." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="w-100">
																	<!--begin::Select2-->
																	<select class="form-select form-select-solid select2-hidden-accessible" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a length class" data-select2-id="select2-data-22-gaej" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option></option>
																		<option value="cm" selected="selected" data-select2-id="select2-data-24-x3le">Centimeter</option>
																		<option value="mm">Milimeter</option>
																		<option value="in">Inch</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-dwes" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-localization_currency-g7-container" aria-controls="select2-localization_currency-g7-container"><span class="select2-selection__rendered" id="select2-localization_currency-g7-container" role="textbox" aria-readonly="true" title="Centimeter">Centimeter</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select2-->
																</div>
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Weight Class</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the unit measurement for weight." data-bs-original-title="Set the unit measurement for weight." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="w-100">
																	<!--begin::Select2-->
																	<select class="form-select form-select-solid select2-hidden-accessible" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a weight class" data-select2-id="select2-data-25-q7dv" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option></option>
																		<option value="kg" selected="selected" data-select2-id="select2-data-27-e023">Kilogram</option>
																		<option value="g">Gram</option>
																		<option value="lb">Pound</option>
																		<option value="oz">Ounce</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-3dl1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-localization_currency-wi-container" aria-controls="select2-localization_currency-wi-container"><span class="select2-selection__rendered" id="select2-localization_currency-wi-container" role="textbox" aria-readonly="true" title="Kilogram">Kilogram</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select2-->
																</div>
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Action buttons-->
														<div class="row py-5">
															<div class="col-md-9 offset-md-3">
																<div class="d-flex">
																	<!--begin::Button-->
																	<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
															</div>
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_products" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Cateogries Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Category Product Count</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!" data-bs-original-title="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="category_product_count" id="category_product_count_yes" checked="checked">
																		<label class="form-check-label" for="category_product_count_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="category_product_count" id="category_product_count_no">
																		<label class="form-check-label" for="category_product_count_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-16 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Default Items Per Page</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Determines how many items are shown per page" data-bs-original-title="Determines how many items are shown per page" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="products_items_per_page" value="10">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Reviews Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Allow Reviews</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enable/disable review entries for registered customers" data-bs-original-title="Enable/disable review entries for registered customers" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="allow_reviews" id="allow_reviews_yes" checked="checked">
																		<label class="form-check-label" for="allow_reviews_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="allow_reviews" id="allow_reviews_no">
																		<label class="form-check-label" for="allow_reviews_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-16">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Allow Guest Reviews</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enable/disable review entries for public guest customers" data-bs-original-title="Enable/disable review entries for public guest customers" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="allow_guest_reviews" id="allow_guest_reviews_yes">
																		<label class="form-check-label" for="allow_guest_reviews_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="allow_guest_reviews" id="allow_guest_reviews_no" checked="checked">
																		<label class="form-check-label" for="allow_guest_reviews_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Vouchers Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Minimum Vouchers</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Minimum number of vouchers customers can attach to an order" data-bs-original-title="Minimum number of vouchers customers can attach to an order" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="products_min_voucher" value="1">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-16 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Maximum Vouchers</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Maximum number of vouchers customers can attach to an order" data-bs-original-title="Maximum number of vouchers customers can attach to an order" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="products_max_voucher" value="10">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Tax Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Display Prices with Tax</span>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="product_tax" id="product_tax_yes" checked="checked">
																		<label class="form-check-label" for="product_tax_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="product_tax" id="product_tax_no">
																		<label class="form-check-label" for="product_tax_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Default Tax Rate</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Determines the tax percentage (%) applied to orders" data-bs-original-title="Determines the tax percentage (%) applied to orders" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="products_tax_rate" value="15%">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Action buttons-->
														<div class="row py-5">
															<div class="col-md-9 offset-md-3">
																<div class="d-flex">
																	<!--begin::Button-->
																	<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
															</div>
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_customers" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Heading-->
														<div class="row mb-7">
															<div class="col-md-9 offset-md-3">
																<h2>Customers Settings</h2>
															</div>
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Customers Online</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enable/disable tracking customers online status." data-bs-original-title="Enable/disable tracking customers online status." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="customers_online" id="customers_online_yes" checked="checked">
																		<label class="form-check-label" for="customers_online_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="customers_online" id="customers_online_no">
																		<label class="form-check-label" for="customers_online_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Customers Activity</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enable/disable tracking customers activity." data-bs-original-title="Enable/disable tracking customers activity." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="customers_activity" id="customers_activity_yes" checked="checked">
																		<label class="form-check-label" for="customers_activity_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="customers_activity" id="customers_activity_no">
																		<label class="form-check-label" for="customers_activity_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Customer Searches</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enable/disable logging customers search keywords." data-bs-original-title="Enable/disable logging customers search keywords." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="customers_searches" id="customers_searches_yes" checked="checked">
																		<label class="form-check-label" for="customers_searches_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="customers_searches" id="customers_searches_no">
																		<label class="form-check-label" for="customers_searches_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Allow Guest Checkout</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enable/disable guest customers to checkout." data-bs-original-title="Enable/disable guest customers to checkout." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="customers_guest_checkout" id="customers_guest_checkout_yes">
																		<label class="form-check-label" for="customers_guest_checkout_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="customers_guest_checkout" id="customers_guest_checkout_no" checked="checked">
																		<label class="form-check-label" for="customers_guest_checkout_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span>Login Display Prices</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Only show prices when customers log in." data-bs-original-title="Only show prices when customers log in." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<div class="d-flex mt-3">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" value="" name="customers_login_prices" id="customers_login_prices_yes">
																		<label class="form-check-label" for="customers_login_prices_yes">Yes</label>
																	</div>
																	<div class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio" value="" name="customers_login_prices" id="customers_login_prices_no" checked="checked">
																		<label class="form-check-label" for="customers_login_prices_no">No</label>
																	</div>
																	<!--end::Radio-->
																</div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-7 fv-plugins-icon-container">
															<div class="col-md-3 text-md-end">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold form-label mt-3">
																	<span class="required">Max Login Attempts</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Set the max number of login attempts before the customer account is locked for 1 hour." data-bs-original-title="Set the max number of login attempts before the customer account is locked for 1 hour." data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
															</div>
															<div class="col-md-9">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="customer_login_attempts" value="">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Action buttons-->
														<div class="row py-5">
															<div class="col-md-9 offset-md-3">
																<div class="d-flex">
																	<!--begin::Button-->
																	<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
																		<span class="indicator-label">Save</span>
																		<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
															</div>
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end:::Tab pane-->
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Card body-->
									</div>
								</div>
								<!--end::Card-->
								<!--begin::Modals-->
								<!--begin::Modal - Customers - Add-->
								<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_modal_add_customer_form" data-kt-redirect="../../demo1/dist/apps/customers/list.html">
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_add_customer_header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add a Customer</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px" style="max-height: 374px;">
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold mb-2">Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean">
															<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7 fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">
																<span class="required">Email</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Email address must be active" data-bs-original-title="Email address must be active" data-kt-initialized="1"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com">
															<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-15">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-2">Description</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="description">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Billing toggle-->
														<div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Shipping Information
															<span class="ms-2 rotate-180">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Billing toggle-->
														<!--begin::Billing form-->
														<div id="kt_modal_add_customer_billing_info" class="collapse show">
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Address Line 1</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">Address Line 2</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address2" value="">
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Town</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="row g-9 mb-7">
																<!--begin::Col-->
																<div class="col-md-6 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fs-6 fw-semibold mb-2">State / Province</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria">
																	<!--end::Input-->
																	<div class="fv-plugins-message-container invalid-feedback"></div>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required fs-6 fw-semibold mb-2">Post Code</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000">
																	<!--end::Input-->
																	<div class="fv-plugins-message-container invalid-feedback"></div>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">Country</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid fw-bold select2-hidden-accessible" data-select2-id="select2-data-13-daj9" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																	<option value="">Select a Country...</option>
																	<option value="AF">Afghanistan</option>
																	<option value="AX">Aland Islands</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AG">Antigua and Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia, Plurinational State of</option>
																	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																	<option value="BA">Bosnia and Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BR">Brazil</option>
																	<option value="IO">British Indian Ocean Territory</option>
																	<option value="BN">Brunei Darussalam</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="CF">Central African Republic</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CX">Christmas Island</option>
																	<option value="CC">Cocos (Keeling) Islands</option>
																	<option value="CO">Colombia</option>
																	<option value="KM">Comoros</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="CI">Côte d'Ivoire</option>
																	<option value="HR">Croatia</option>
																	<option value="CU">Cuba</option>
																	<option value="CW">Curaçao</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FK">Falkland Islands (Malvinas)</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="PF">French Polynesia</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GG">Guernsey</option>
																	<option value="GN">Guinea</option>
																	<option value="GW">Guinea-Bissau</option>
																	<option value="HT">Haiti</option>
																	<option value="VA">Holy See (Vatican City State)</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IR">Iran, Islamic Republic of</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IM">Isle of Man</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JE">Jersey</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KI">Kiribati</option>
																	<option value="KP">Korea, Democratic People's Republic of</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Lao People's Democratic Republic</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macao</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia, Federated States of</option>
																	<option value="MD">Moldova, Republic of</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="MM">Myanmar</option>
																	<option value="NA">Namibia</option>
																	<option value="NR">Nauru</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NU">Niue</option>
																	<option value="NF">Norfolk Island</option>
																	<option value="MP">Northern Mariana Islands</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK">Pakistan</option>
																	<option value="PW">Palau</option>
																	<option value="PS">Palestinian Territory, Occupied</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russian Federation</option>
																	<option value="RW">Rwanda</option>
																	<option value="BL">Saint Barthélemy</option>
																	<option value="KN">Saint Kitts and Nevis</option>
																	<option value="LC">Saint Lucia</option>
																	<option value="MF">Saint Martin (French part)</option>
																	<option value="VC">Saint Vincent and the Grenadines</option>
																	<option value="WS">Samoa</option>
																	<option value="SM">San Marino</option>
																	<option value="ST">Sao Tome and Principe</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SL">Sierra Leone</option>
																	<option value="SG">Singapore</option>
																	<option value="SX">Sint Maarten (Dutch part)</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="SB">Solomon Islands</option>
																	<option value="SO">Somalia</option>
																	<option value="ZA">South Africa</option>
																	<option value="KR">South Korea</option>
																	<option value="SS">South Sudan</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="SD">Sudan</option>
																	<option value="SR">Suriname</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syrian Arab Republic</option>
																	<option value="TW">Taiwan, Province of China</option>
																	<option value="TJ">Tajikistan</option>
																	<option value="TZ">Tanzania, United Republic of</option>
																	<option value="TH">Thailand</option>
																	<option value="TG">Togo</option>
																	<option value="TK">Tokelau</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad and Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks and Caicos Islands</option>
																	<option value="TV">Tuvalu</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom</option>
																	<option value="US" selected="selected" data-select2-id="select2-data-15-q6jo">United States</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VE">Venezuela, Bolivarian Republic of</option>
																	<option value="VN">Vietnam</option>
																	<option value="VI">Virgin Islands</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-qv6p" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-7s-container" aria-controls="select2-country-7s-container"><span class="select2-selection__rendered" id="select2-country-7s-container" role="textbox" aria-readonly="true" title="United States">United States</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack">
																	<!--begin::Label-->
																	<div class="me-5">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold">Use as a billing adderess?</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<span class="form-check-label fw-semibold text-muted" for="kt_modal_add_customer_billing">Yes</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
																<!--begin::Wrapper-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Billing form-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - Customers - Add-->
								<!--begin::Modal - Adjust Balance-->
								<div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bold">Export Customers</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_customers_export_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
													<!--begin::Input group-->
													<div class="fv-row mb-10">
														<!--begin::Label-->
														<label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid select2-hidden-accessible" data-select2-id="select2-data-16-1ayb" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option value="excell" data-select2-id="select2-data-18-6b92">Excel</option>
															<option value="pdf">PDF</option>
															<option value="cvs">CVS</option>
															<option value="zip">ZIP</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-487v" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-format-t6-container" aria-controls="select2-format-t6-container"><span class="select2-selection__rendered" id="select2-format-t6-container" role="textbox" aria-readonly="true" title="Excel">Excel</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-10 fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid flatpickr-input" placeholder="Pick a date" name="date" type="hidden"><input class="form-control form-control-solid form-control input" placeholder="Pick a date" tabindex="0" type="text" readonly="readonly">
														<!--end::Input-->
														<div class="fv-plugins-message-container invalid-feedback"></div>
													</div>
													<!--end::Input group-->
													<!--begin::Row-->
													<div class="row fv-row mb-15">
														<!--begin::Label-->
														<label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
														<!--end::Label-->
														<!--begin::Radio group-->
														<div class="d-flex flex-column">
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type">
																<span class="form-check-label text-gray-600 fw-semibold">All</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type">
																<span class="form-check-label text-gray-600 fw-semibold">Visa</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="3" name="payment_type">
																<span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid">
																<input class="form-check-input" type="checkbox" value="4" name="payment_type">
																<span class="form-check-label text-gray-600 fw-semibold">American Express</span>
															</label>
															<!--end::Radio button-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Row-->
													<!--begin::Actions-->
													<div class="text-center">
														<button type="reset" id="kt_customers_export_cancel" class="btn btn-light me-3">Discard</button>
														<button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - New Card-->
								<!--end::Modals-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					<div id="kt_app_footer" class="app-footer">
						<!--begin::Footer container-->
						<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023©</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Footer container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none border-0 rounded-0">
			<!--begin::Header-->
			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body position-relative" id="kt_activities_body">
				<!--begin::Content-->
				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
					<!--begin::Timeline items-->
					<div class="timeline">
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
											<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
										<!--begin::Title-->
										<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
										<!--begin::Title-->
										<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-20.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
											<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n2">
								<!--begin::Timeline heading-->
								<div class="overflow-auto pe-3">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="assets/media/avatars/300-1.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
											<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="mb-5 pe-3">
									<!--begin::Title-->
									<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="assets/media/avatars/300-23.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">1.9mb</div>
												<!--end::Number-->
											</div>
											<!--begin::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">18kb</div>
												<!--end::Number-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center">
											<!--begin::Icon-->
											<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">20mb</div>
												<!--end::Number-->
											</div>
											<!--end::Icon-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
											<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
											<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
											<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="overflow-auto pb-5">
										<!--begin::Wrapper-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
											<!--end::User-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
											<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="assets/media/avatars/300-4.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
												<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-semibold">
												<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
											<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
											<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
					</div>
					<!--end::Timeline items-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
			<!--begin::Footer-->
			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
			</div>
			<!--end::Footer-->
		</div>
	</div>
	<!--end::Activities drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-semibold text-muted">Active</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Menu-->
					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>
						<!--begin::Menu 3-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
							<!--begin::Heading-->
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>
							<!--end::Heading-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 3-->
					</div>
					<!--end::Menu-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(template for out)-->
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for out)-->
					<!--begin::Message(template for in)-->
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for in)-->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-paperclip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-upload fs-3"></i>
						</button>
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
		<!--begin::Messenger-->
		<div class="card card-flush w-100 rounded-0">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Title-->
				<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body hover-scroll-overlay-y h-400px pt-5">
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
							<span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 350</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
							<span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 650</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
							<span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 150</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
							<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
							<span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 650</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
							<span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 720</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
							<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 430</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
								<span class="svg-icon svg-icon-4">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
										<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer">
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<span class="fw-bold text-gray-600">Total</span>
					<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
				</div>
				<!--end::Item-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<span class="fw-bold text-gray-600">Sub total</span>
					<span class="text-primary fw-bolder fs-5">$ 246.35</span>
				</div>
				<!--end::Item-->
				<!--end::Action-->
				<div class="d-flex justify-content-end mt-9">
					<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--end::Drawers-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Modal - Upgrade plan-->
	<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-xl">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<h1 class="mb-3">Upgrade a Plan</h1>
						<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
						</div>
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
												<div class="fw-semibold opacity-75">Best for startups</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="advanced" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
												<div class="fw-semibold opacity-75">Best for 100+ team size</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="enterprise" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
												</div>
												<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="custom" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
												<div class="fw-semibold opacity-75">Requet a custom license</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<a href="#" class="btn btn-sm btn-success">Contact Us</a>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
								</div>
								<!--end::Tabs-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6">
								<!--begin::Tab content-->
								<div class="tab-content rounded h-100 bg-light p-10">
									<!--begin::Tab Pane-->
									<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_custom">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for corporations</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
					<!--begin::Actions-->
					<div class="d-flex flex-center flex-row-fluid pt-12">
						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
							<!--begin::Indicator label-->
							<span class="indicator-label">Upgrade Plan</span>
							<!--end::Indicator label-->
							<!--begin::Indicator progress-->
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							<!--end::Indicator progress-->
						</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Upgrade plan-->
	<!--begin::Modal - View Users-->
	<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Browse Users</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
							<a href="#" class="link-primary fw-bold">Users Directory</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Users-->
					<div class="mb-15">
						<!--begin::List-->
						<div class="mh-375px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">smith@kpmg.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$23,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">melody@altbox.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$50,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">max@kt.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$75,900</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">sean@dellito.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$10,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">brian@exchange.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$20,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">mik@pex.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$9,300</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$15,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
											<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$23,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$45,800</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">dam@consilting.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$90,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">emma@intenso.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$5,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$70,000</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-5">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-6">
										<!--begin::Name-->
										<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
										<!--end::Name-->
										<!--begin::Email-->
										<div class="fw-semibold text-muted">robert@benko.com</div>
										<!--end::Email-->
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Stats-->
								<div class="d-flex">
									<!--begin::Sales-->
									<div class="text-end">
										<div class="fs-5 fw-bold text-dark">$45,500</div>
										<div class="fs-7 text-muted">Sales</div>
									</div>
									<!--end::Sales-->
								</div>
								<!--end::Stats-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex justify-content-between">
						<!--begin::Label-->
						<div class="fw-semibold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - View Users-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-semibold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
												<div class="fw-semibold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
												<div class="fw-semibold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
												<div class="fw-semibold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
												<div class="fw-semibold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
												<div class="fw-semibold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
												<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
												<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
												<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
												<div class="fw-semibold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
												<div class="fw-semibold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
												<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
												<div class="fw-semibold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
												<div class="fw-semibold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
												<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
												<div class="fw-semibold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
												<div class="fw-semibold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-semibold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts
					</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
										<div class="fw-semibold text-muted">smith@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
										<div class="fw-semibold text-muted">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
										<div class="fw-semibold text-muted">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
										<div class="fw-semibold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
										<div class="fw-semibold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
										<div class="fw-semibold text-muted">mik@pex.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
										<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
										<div class="fw-semibold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
										<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
										<div class="fw-semibold text-muted">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
										<div class="fw-semibold text-muted">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
										<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
										<div class="fw-semibold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
										<div class="fw-semibold text-muted">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
										<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
										<div class="fw-semibold text-muted">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
										<div class="fw-semibold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-semibold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="<?php echo base_url() ?>assets/js/widgets.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/js/custom/widgets.js"></script>
	<script src="<?php echo base_url() ?>assets/js/custom/apps/chat/chat.js"></script>
	<script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="<?php echo base_url() ?>assets/js/custom/utilities/modals/users-search.js"></script>
	<!--end::Custom Javascript-->
	<script>
		$(document).ready(function() {
			// Time function start
			function t() {
				var current_date = new Date();
				document.getElementById('timeNow').innerHTML = '<b>' + current_date.getFullYear() + "-" + (((current_date.getMonth() + 1) < 10 ? '0' : '') + (current_date.getMonth() + 1)) + "-" + current_date.getDate() + " " + current_date.getHours() + ":" + ((current_date.getMinutes() < 10 ? '0' : '') + current_date.getMinutes()) + ":" + ((current_date.getSeconds() < 10 ? '0' : '') + current_date.getSeconds()) + '</b>';
				// document.getElementById('time').innerHTML = '<b>' + current_date.getFullYear() + "-" + (((current_date.getMonth() + 1) < 10 ? '0' : '') + (current_date.getMonth() + 1)) + "-" + current_date.getDate() + " " + current_date.getHours() + ":" + ((current_date.getMinutes() < 10 ? '0' : '') + current_date.getMinutes()) + ":" + ((current_date.getSeconds() < 10 ? '0' : '') + current_date.getSeconds()) + '</b>';
			}
			t();
			window.setInterval(t, 1000);
			// Time function end
			function s() {
				var today_date = new Date();
				document.getElementById('time').innerHTML = '<b>' + today_date.getFullYear() + "-" + (((today_date.getMonth() + 1) < 10 ? '0' : '') + (today_date.getMonth() + 1)) + "-" + today_date.getDate() + " " + today_date.getHours() + ":" + ((today_date.getMinutes() < 10 ? '0' : '') + today_date.getMinutes()) + ":" + ((today_date.getSeconds() < 10 ? '0' : '') + today_date.getSeconds()) + '</b>';
			}
			s();
			window.setInterval(s, 1000);

			$('#btnCheckIn').click(function() {
				var element = document.getElementById("btnCheckIn");
				element.style.display = "none";
				var checkOut = document.getElementById("btnCheckout");
				checkOut.style.display = "block";
			});
			$('#btnCheckout').click(function() {
				var element = document.getElementById("btnCheckIn");
				element.style.display = "block";
				var checkOut = document.getElementById("btnCheckout");
				checkOut.style.display = "none";
			});
		});
	</script>
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>