<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('custom')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('custom')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('custom')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('custom')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                       <div class="panel-heading">
                        <h3 style="text-align: center; color:#006544; border:1px solid white; width:100%;  padding:10px; font-family: cursive; float:top; margin-top:-10px;">  Inventory Management</h3>


                        <h3 class="panel-title">Please Sign In</h3>
                       
                       {{ Session::get('msg')}} 

                       
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login.custom') }}">
                        {{ csrf_field() }}

                            <fieldset>
                                    
                                    


                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>


                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div><br>
                              


                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    {{ __('Login') }}
                                </button>

                           

                                 @if (Route::has('register'))
                                
                                    <a class="btn btn-link" style="float:left; color:darkviolet;" href="{{ route('register') }}">{{ __('Register') }}</a>
                              
                                @endif 


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('custom')}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('custom')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('custom')}}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('custom')}}/dist/js/sb-admin-2.js"></script>

</body>

</html>

