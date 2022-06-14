@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">
    <div class="col-lg-8">
       
         <div class="card-body bg-white">
         <img class="card-img-top" style="width: 350px;" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" >
         <br>
         <br>
         <h3 style="color: maroon;">Edit Your Profile</h3>
         <br>
         <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">Name</h4>
                </div>
                <div class="col-md-5">
                <input type="text" name="name" id="name" value="{{ $EditData->name }}" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">Email</h4>
                </div>
                <div class="col-md-5">
                <input type="text" name="email" id="email" value="{{ $EditData->email }}" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">User Name</h4>
                </div>
                <div class="col-md-5">
                <input type="text" name="username" id="username" value="{{ $EditData->username }}" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                <h4 class="card-title">Profile Picture</h4>
                </div>
                <div class="col-md-5">
                <input type="file" name="profile_image" class="form-control" id="image">
                </div>
            </div>
            <hr>
            <div class="row">
                <p>Preview</p>
            <img class="card-img-top" id="showImage" style="width: 50%;" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" >
            </div>
            <hr>

            <button type="submit" class="btn btn-default btn-rounded waves-effect waves-light form-control" style="background-color: maroon; color: #fff;" >Update Profile</button>

         </div>
    </div>
</form>

</div>
</div>
<br>

<script>

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection