@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">
    <div class="col-lg-8">
       
         <div class="card-body bg-white">
         <br>
         <h4 class="card-title" style="color: maroon;">Edit Your Password</h4>
         @if(count($errors))
            @foreach ($errors->all() as $error)
             <p class="alert alert-danger alert-dismissible fade show">{{ $error }} </p>                   
            @endforeach
         @endif
         <br>
         <form method="POST" action="{{ route('update.password') }}" >
            @csrf
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">Old Password</h4>
                </div>
                <div class="col-md-5">
                <input type="password" name="oldpassword" id="oldpassword"  class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">New Password</h4>
                </div>
                <div class="col-md-5">
                <input type="password" name="newpassword" id="newpassword"  class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">Confirm Password</h4>
                </div>
                <div class="col-md-5">
                <input type="password" name="confirm_password" id="confirm_password"  class="form-control">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-default btn-rounded waves-effect waves-light form-control" style="background-color: maroon; color: #fff;" >Change Password</button>

         </div>
    </div>
</form>

</div>
</div>
<br>


@endsection