<?php include('header.php') ?>
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            <div class="card">
  <div class="d-sm-flex align-items-center justify-content-between">
  <h5 class=" mb-0 text-gray-800 pl-3">Add New Gateway <a class="btn btn-primary btn-rounded btn-sm" href="https://product.geniusocean.com/tradegenius/admin/paymentgateway"><i class="fas fa-arrow-left"></i> Back</a></h5>
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="javascript:;">Payment Gateway</a></li>
  </ol>
  </div>
</div>

<div class="row justify-content-center mt-3">
<div class="col-md-12">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Payment Gateway Form</h6>
    </div>
    <?php

if(isset($_POST['wallets']))
{
  $wname = $_POST['wname'];
  $wsub = $_POST['wsub'];
  $wid = 1900;
  $max = 100;

  
  $wall = $user->addWallet($wname, $wsub,$wid,$max);
  if($wall)
  {
    echo '<script> alert("ACTION WAS SUCCESSFUL");</script>';
    echo '<script> window.location="dashboard.php";</script>';
  }else
  {
    echo '<script> alert("ACTION WAS SUCCESSFUL");</script>';
    echo '<script> window.location="dashboard.php";</script>';
  }

}
?>
    <div class="card-body">
      <div class="gocover" style="background: url(https://product.geniusocean.com/tradegenius/assets/images/BWZuw2HJ1661832829.gif) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form  action="" method="POST">
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control"  name="wname" placeholder="Enter Name" value="" required>
          </div>

          <div class="form-group">
            <label for="subtitle">SHORT FORM</label>
            <input type="text" class="form-control"  name="wsub" placeholder="Enter Subtitle" value="" required>
          </div>

          <div class="form-group">
            <label for="details">WALLET Addresss </label>
            <textarea class="form-control"   name="wid" required rows="3" placeholder="Description"></textarea>
          </div>


          <button type="submit" name="wallets" class="btn btn-primary w-100">Submit</button>

      </form>
    </div>
  </div>
</div>


</div>

        </div>
        <!---Container Fluid-->
      </div>

    </div>
  </div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- <script type="text/javascript">
    'use strict';
    var form_error   = "Please fill all the required fields";
    var mainurl = "https://product.geniusocean.com/tradegenius";
    var admin_loader = 1;

  </script> -->

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