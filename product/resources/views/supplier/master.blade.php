<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('page-title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('custom') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('custom') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('custom') }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('custom') }}/vendor/morrisjs/morris.css" rel="stylesheet">





    <!-- Custom Fonts -->
    <link href="{{ asset('custom') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   






</head>

<body>

    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        
          @include('inc.navBar')
 

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                
                 @include('supplier.inc.leftBar')


            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> @yield('page-head') </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @yield('mainContent')
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <script src="{{ asset('custom') }}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('custom') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('custom') }}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
   <script src="{{ asset('custom') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('custom') }}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{ asset('custom') }}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
   <script src="{{ asset('custom') }}/dist/js/sb-admin-2.js"></script>


   




</body>

</html>
