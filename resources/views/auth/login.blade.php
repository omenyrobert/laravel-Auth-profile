<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>a-arnold | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

<!-- jquery.vectormap css -->
<link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  

<!-- Bootstrap Css -->
<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>

    <body style="background-image: url('back.jpg'); background-size: cover;">
    <div class="bg-overlay"></div>
    <div class="row">
        <div class="col-md-6">
<h1 style="text-align: center; font-weight: bold; color: #fff; margin-top: 100px;">A-ARNOLD ONLINE CREDIT MANAGEMENT SYSTEM</h1>
        </div>

        <div class="col-md-6">
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                     <br/>
                        <h4 class="text-center font-size-18" style="color: maroon;"><b>Login</b></h4>
                        <x-auth-validation-errors style="color: red;" class="mb-4" :errors="$errors" />
                        <div class="p-3">
<form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
@csrf


    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" type="email" name="email" id="email" required="" placeholder="Email">
        </div>
    </div>


    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" >
        </div>
    </div>

    <div class="form-group mb-3 row">
    <div class="col-12 mt-3 text-center" style="display: flex; justify-content: space-between;">
    <p><input type="checkbox">&nbsp;&nbsp;Remember me</p>
            <a href="{{ route('password.request') }}" class="text-muted">Forgot your password?</a>
        </div>
    </div>

    <div class="form-group text-center row mt-3 pt-1">
        <div class="col-12">
            <button style="background-color: maroon; color: #fff;" class="btn btn-default w-100 waves-effect waves-light" type="submit">Login</button>
        </div>
    </div>

    <div class="form-group mt-2 mb-0 row">
        <div class="col-12 mt-3 text-center">
            <a href="{{ route('register') }}" class="text-muted">Create Account?</a>
        </div>
    </div>
</form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        </div>

    </div>
       

        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        
        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
             
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

    </body>
</html>
