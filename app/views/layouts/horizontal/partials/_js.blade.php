@section('bottomlinks')
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="{{ asset('metronic/assets/global/plugins/respond.min.js') }}"></script>
    <script src="{{ asset('metronic/assets/global/plugins/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('metronic/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="{{ asset('metronic/assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <script src="{{ asset('metronic/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/admin/layout3/scripts/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/admin/layout3/scripts/demo.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
        });
    </script>
    <!-- END JAVASCRIPTS -->
@show