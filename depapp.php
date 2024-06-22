<?php include('header.php') ?>
<?php
$id =$_REQUEST['UID'];
$pr = $user->getD($id);
?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            
<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo $pr['uid'] ?></h5>
        <ol class="breadcrumb py-0 m-0">
            <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">User</a></li>
            <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/users">Users</a></li>
        </ol>
	</div>
</div>


<div class="row mt-3">
  <div class="col-lg-12">
    	<div class="alert alert-success" style="display: none;" role="alert">
        <button type="button" class="close hide-close" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <p class="m-0"></p>
      </div>


	<div class="card">
        <div class="row my-5">
            <div class="col-md-2">
                <div class="user-image">
                                        <img  class="" src="https://product.geniusocean.com/tradegenius/assets/images/noimage.png" alt="No Image">
                                        <a  class="mybtn1 btn btn-primary"  data-email="456456564@gmail.com" data-toggle="modal" data-target="#vendorform" href="">Send Message</a>

                </div>
            </div>
            <!-- <div class="col-md-5 mt-5">
                <div class="table-responsive show-table">
                    <table class="table">
                    <tr>
                      <th>ID#</th>
                      <td><?php echo $pro['id'] ?> </td>
                    </tr>
                    <tr>
                      <th>Username</th>
                      <td><?php echo $pro['uname'] ?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td><?php echo $pro['email'] ?></td>
                    </tr>
                    <tr>
                      <th>Phone</th>
                      <td><?php echo $pro['phone'] ?></td>
                    </tr>

                    <tr>
                      <th>City</th>
                      <td></td>
                    </tr>

                    <tr>
                      <th>Zip Code</th>
                      <td></td>
                    </tr>


                    </table>
                </div>
            </div> -->
            <div class="col-md-4 mx-auto ">
              <h3 class="card-title text-center"> <strong>Available Balance : $<?php 
            echo  $pr['amount'];
             
              
              
              ?></strong></h3>
              <form action="" method="post">
                  <div class="form-group">
                  <!-- <label for="inp-address">Amount</label> -->
                  <input type="hidden" class="form-control" id="inp-address" name="amount"  placeholder="Enter Amount" value="<?php echo $pr['amount'] ?>" min="0" step="0.01" required>
                </div>

                <input type="hidden" name="uid" value="<?php echo $pr['id'] ?>">
                <input type="hidden" name="pid" value="<?php echo $_REQUEST['UID'] ?>">

                <!-- <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Type</label>
                  <select class="form-control" name="ttype" id="exampleFormControlSelect1" required>
                    <option value="">---SELECT ----</option>
                    <option value="Approve">add amount</option>
                    <option value="debit">subtract amount</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Payment Method</label>
                  <select class="form-control" name="trantype" id="exampleFormControlSelect1" required>
                 
                    <option value="Account Credited">Account Credited</option>
                    
                  </select>
                </div> -->
                <button type="submit"  name="submit" id="submit-btn" class="btn btn-primary w-100">Approve</button><br><br><br>
                <button type="submit"  name="reject" id="submit-btn" class="btn btn-danger w-100">Reject</button>
              </form>
                </div>

               
            </div>
        </div>


	</div>
  </div>
  <!-- DataTable with Hover -->
  <?php
if(isset($_POST['submit']))
{
$id =$_POST['uid'];
$lid =$_POST['pid'];
$bal =$_POST['amount'];
$depo =$_POST['amount'];
$transmeth =$_POST['trantype'];
$transtype =$_POST['ttype'];
$transdate = date('M j, Y h:i:sa');
$sta ='sucessful';

  $addtobal = $user->AddDep($bal,$depo,$lid);
  if($addtobal)
  {
    $addtrans = $user->UpDepo($bal,$sta,$id);
    if($addtrans)
    {
      echo '<script> alert("ACCOUNT BALANCE HAS BEEN CREDITED  AND DEPOSIT SUCCESSFULLY");</script>';
      echo '<script> window.location="dashboard.php";</script>';
    }else{
        echo '<script> alert("ERROR WHILE PERFORMING THE ACTION");</script>';
        echo '<script> window.location="dashboard.php";</script>';
    }
  }



}

?>

<?php
if(isset($_POST['reject']))
{
$id =$_POST['uid'];
$lid =$_POST['pid'];
$bal =$_POST['amount'];
$depo =$_POST['amount'];
$transmeth =$_POST['trantype'];
$transtype =$_POST['ttype'];
$transdate = date('M j, Y h:i:sa');
$sta ='reject';

  
    $addtrans = $user->UprejectDep($bal,$sta,$lid);
    if($addtrans)
    {
      echo '<script> alert("DEPOSIT TRANSACTION HAS BEEN REJECTED);</script>';
      echo '<script> window.location="dashboard.php";</script>';
    }else{
        echo '<script> alert("ERROR WHILE PERFORMING THE ACTION");</script>';
        echo '<script> window.location="dashboard.php";</script>';
    }
  



}

?>
</div>

<div class="row mb-3">


  </div>
<!--Row-->



<div class="modal fade confirm-modal" id="statusModal" tabindex="-1" role="dialog"
	aria-labelledby="statusModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title">Update Status</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
			<p class="text-center">You are about to change the status.</p>
			<p class="text-center">Do you want to proceed?</p>
		</div>
		<div class="modal-footer">
		<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
		<a href="javascript:;" class="btn btn-success btn-ok">Update</a>
		</div>
	</div>
	</div>
</div>





<div class="sub-categori">
    <div class="modal fade confirm-modal" id="vendorform" tabindex="-1" role="dialog"
    aria-labelledby="vendorformLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="vendorformLabel">Send Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form id="emailreply1">
                                <input type="hidden" name="_token" value="8ihtQPruUI2igZg8ZcUvRaRzXKPnTt6P0OhUF4uT">

                                <div class="form-group">
                                    <input type="email" class="form-control" id="eml1" name="to"  placeholder="Email" value="456456564@gmail.com" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subj1" name="subject"  placeholder="Subject" value="" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="msg1" cols="20" rows="6" placeholder="Your Message "required=""></textarea>
                                </div>



                                <button class="submit-btn btn btn-primary text-center" id="emlsub1" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    



<div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog"
aria-labelledby="deleteModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Confirm Delete</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
	<p class="text-center">You are about to delete this Blog.</p>
	<p class="text-center">Do you want to proceed?</p>
</div>
<div class="modal-footer">
	<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
	<a href="javascript:;" class="btn btn-danger btn-ok">Delete</a>
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
