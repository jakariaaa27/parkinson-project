<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 08:32:07 GMT -->
<head>
    @include('Backend.includes.head')
 </head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        @include('Backend.includes.header')
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
             @include('Backend.includes.sidebar')
			 <!-- end sidebar menu -->
			<!-- start page content -->
                 @yield('content')
            <!-- end page content -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        @include('Backend.includes.footer')
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/plugins/jquery/jquery.min.js" ></script>
	<script src="../assets/plugins/popper/popper.min.js" ></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- data tables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="../assets/js/pages/table/table_data.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.com/templates/admin/sunray/source/light/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 08:32:08 GMT -->
</html>