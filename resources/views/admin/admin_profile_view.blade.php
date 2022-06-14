@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">
    <div class="col-lg-5">
        <img class="card-img-top img-fluid" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpeg') }}" alt="Card image cap" >
         <div class="card-body bg-white">
            <h4 class="card-title">Name : {{ $adminData->name }}</h4>
            <hr>
            <h4 class="card-title">User Email : {{ $adminData->email }}</h4>
            <hr>
            <h4 class="card-title">User Name : {{ $adminData->username }}</h4>
            
            <a href="{{ route('edit.profile') }}" class="btn btn-default btn-rounded waves-effect waves-light form-control" style="background-color: maroon; color: #fff;" >Edit Profile</a>

         </div>
    </div>

</div>
</div>
<br>
@endsection