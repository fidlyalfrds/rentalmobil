<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 01:21:45 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Rental Mobil</title>
<!-- ================== GOOGLE FONTS ==================-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
<!-- ======================= GLOBAL VENDOR STYLES ========================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/metismenu/dist/metisMenu.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/switchery-npm/index.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/icons/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/icons/simple-line-icons.css') }}">
<!-- ======================= DRIP ICONS ===================================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/icons/dripicons.min.css') }}">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/icons/material-design-iconic-font.min.css') }}">
<!-- ======================= PAGE VENDOR STYLES ===========================-->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/select2/select2.min.css') }}">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/common/main.bundle.css') }}">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/vertical/core/main.css') }}">
<!-- ======================= MENU TYPE ===========================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/vertical/menu-type/default.css') }}">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/vertical/themes/theme-a.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<!-- START APP WRAPPER -->
<div id="app">
	<!-- START MENU SIDEBAR WRAPPER -->
	@include('partials.sidebar')
	<!-- END MENU SIDEBAR WRAPPER -->
	<div class="content-wrapper">
		<!-- START LOGO WRAPPER -->
		@include('partials.navbar')
		<!-- END TOP TOOLBAR WRAPPER -->
		<div class="content">
			<!--START PAGE HEADER -->
			<header class="page-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h1>Hallo, {{ Auth::user()->name }}</h1>
				</div>
			</div>
			</header>
			<!--END PAGE HEADER -->
			<!--START PAGE CONTENT -->
			@yield('content')
			<!--END PAGE CONTENT -->
        </div>
		<!-- SIDEBAR QUICK PANNEL WRAPPER -->

		<!-- END SIDEBAR QUICK PANNEL WRAPPER --></div>
</div>
<!-- END CONTENT WRAPPER -->
<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
<script src="{{ asset('admin/assets/vendor/modernizr/modernizr.custom.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js-storage/js.storage.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js-cookie/src/js.cookie.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/pace/pace.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/metismenu/dist/metisMenu.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/switchery-npm/index.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
<script src="{{ asset('admin/assets/vendor/countup.js/dist/countUp.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/chart.js/dist/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/flot.curvedlines/curvedLines.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/assets/js/components/datatables-init.js') }}"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src="{{ asset('admin/assets/js/global/app.js') }}"></script>
<!-- ================== PAGE LEVEL SCRIPTS ==================-->
<script src="{{ asset('admin/assets/js/components/countUp-init.js') }}"></script>
<script src="{{ asset('admin/assets/js/cards/counter-group.js') }}"></script>
<script src="{{ asset('admin/assets/js/cards/recent-transactions.js') }}"></script>
<script src="{{ asset('admin/assets/js/cards/monthly-budget.js') }}"></script>
<script src="{{ asset('admin/assets/js/cards/users-chart.js') }}"></script>
<script src="{{ asset('admin/assets/js/cards/bounce-rate-chart.js') }}"></script>
<script src="{{ asset('admin/assets/js/cards/session-duration-chart.js') }}"></script>
<script src="{{ asset('admin/assets/js/components/select2-init.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/select2/select2.min.js') }}"></script>

<!-- SEARCH SELECT -->
<script src="{{ asset('admin/assets/js/select/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/select/jquery-3.5.1.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#getID').select2();

        $('#getID').on('change', function () {
            var selectedId = $(this).val();
            console.log('Selected ID:', selectedId);
        });
    });
</script>
</body>
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 01:24:20 GMT -->
</html>