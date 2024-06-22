<?php include('header.php') ?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            
<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3">Edit Users <a class="btn btn-primary btn-rounded btn-sm" href="https://product.geniusocean.com/tradegenius/admin/users"><i class="fas fa-arrow-left"></i> Back</a></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">User Edit</a></li>
        <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/users">User List</a></li>
        <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/users/edit/210">Edit User</a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit User Form</h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(https://product.geniusocean.com/tradegenius/assets/images/BWZuw2HJ1661832829.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="https://product.geniusocean.com/tradegenius/admin/users/edit/210" method="POST" enctype="multipart/form-data">

            <div class="alert alert-success alert-dismissible" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p class="m-0"></p>
</div>


<div class="alert alert-danger alert-dismissible" style="display: none;" role="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <p class="m-0"></p>
</div>


            <input type="hidden" name="_token" value="8ihtQPruUI2igZg8ZcUvRaRzXKPnTt6P0OhUF4uT">

            <div class="form-group">
                <label>Set Picture</label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url(https://product.geniusocean.com/tradegenius/assets/images/placeholder.jpg);"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> Upload Picture </label>
                            <input id="img-upload" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inp-name">Name</label>
                <input type="text" class="form-control" id="inp-name" name="name"  placeholder="Enter Name" value="456456564" required>
            </div>

            <div class="form-group">
                <label for="inp-email">Email</label>
                <input type="text" class="form-control" id="inp-email" name="email"  placeholder="Enter Email" value="456456564@gmail.com" disabled="">
            </div>

            <div class="form-group">
                <label for="inp-phone">Phone</label>
                <input type="text" class="form-control" id="inp-phone" name="phone"  placeholder="Enter Phone" value="456456564" required>
            </div>

            <div class="form-group">
                <label for="inp-address">Address</label>
                <input type="text" class="form-control" id="inp-address" name="address"  placeholder="Enter Address" value="" required>
            </div>


            <div class="form-group">
                <label for="inp-city">City</label>
                <input type="text" class="form-control" id="inp-city" name="city"  placeholder="Enter City" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-fax">Fax</label>
                <input type="text" class="form-control" id="inp-fax" name="fax"  placeholder="Enter Fax" value="" >
            </div>

            <div class="form-group">
                <label for="inp-zip">Postal Code</label>
                <input type="text" class="form-control" id="inp-zip" name="zip"  placeholder="Enter Zip" value="" required>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100">Submit</button>

        </form>
      </div>
    </div>

    <!-- Form Sizing -->

    <!-- Horizontal Form -->

  </div>

</div>
<!--Row-->


        </div>
        <!---Container Fluid-->
      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <script type="text/javascript">
    'use strict';
    var form_error   = "Please fill all the required fields";
    var mainurl = "https://product.geniusocean.com/tradegenius";
    var admin_loader = 1;

  </script>

  <script src="https://product.geniusocean.com/tradegenius/assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/plugin.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/chart.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/toastr.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/bootstrap-colorpicker.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/bootstrap-iconpicker.bundle.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/colorpicker.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/select2.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/tagify.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/summernote.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/sortable.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/bootstrap.bundle.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/bootstrap-datepicker.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/front/js/toastr.min.js"></script>
  <script src="https://product.geniusocean.com/tradegenius/assets/admin/js/ruang-admin.js"></script>


  <script>
    'use strict';

    
    
    
      </script>

  
</body>

</html>
