<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory Management</title>


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('custom') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('custom') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ asset('custom') }}/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('custom') }}/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('custom') }}/dist/css/sb-admin-2.css" rel="stylesheet">

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

            @include('user.inc.leftBar')


        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Supplied Product List </h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


        <div class="panel-body">


     
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>Supply ID.</th>
                                        
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Product Quantity</th>

                                     
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                	

                                	@foreach($actManage as $manage)
                                    

                                    <tr class="odd gradeX">
                                        <td> {{ $manage->id }}</td>
                                        <td>{{ $manage->code }}</td>
                                        <td>{{ $manage->name}}</td>
                                        <td>{{ $manage->quantity}}</td>
                                      

                                      
                                         
                                       

                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>


        </div>

        <!-- jQuery -->
        <script src="{{ asset('custom') }}/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('custom') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('custom') }}/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="{{ asset('custom') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('custom') }}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="{{ asset('custom') }}/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('custom') }}/dist/js/sb-admin-2.js"></script>


        <script>

			$(document).ready(function()
			{
				$('#dataTables').DataTable({
					responsive: true
				});
			});

        </script>


    </div>


</div>

