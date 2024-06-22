<?php include('header.php') ?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            

    <div class="card">
        <div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3">User List</h5>
        <ol class="breadcrumb py-0 m-0">
            <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>

            <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/users">User List</a></li>
        </ol>
        </div>
    </div>


    <!-- Row -->
    <div class="row mt-3">
      <!-- Datatables -->
      <div class="col-lg-12">

        <div class="alert alert-success" style="display: none;" role="alert">
        <button type="button" class="close hide-close" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <p class="m-0"></p>
      </div>


        <div class="card mb-4">
          <div class="table-responsive p-3">
            <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
              <thead class="thead-light">
                <tr>
                    <th>S/N</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Method</th>
                    <th>Amount</th>
                    <th>Trans Date</th>
                    <th>Trans Status</th>
                     <th>Action</th>
                     <th>Action</th>

                   
                </tr>
              </thead>

              <tbody>


<?php
                    $i=1;
                foreach($dep as $deps)
                {

                ?>
<tr>
		<td data-label="No"><?= $i;?></td>
        <td data-label="Type"><?= $deps['fname'];?></td>
        <td data-label="Amount"><?= $deps['transtype'];?></td>
        <td data-label="Amount"><?= $deps['transmeth'];?></td>
		<td data-label="Txnid"><?= $deps['amount'];?></td>
		<td data-label="Txnid"><?= $deps['transdate'];?></td>
		<td data-label="Date"><?= $deps['trans_status'];?></td> 
    <td data-label="Action"><a href="approve.php?UID=<?= $deps['id'];?>" class="btn btn-sm btn-primary">Approve</a></td>
    <td data-label="Action"><a href="reject.php?UID=<?= $deps['id'];?>" class="btn btn-sm btn-danger">Reject</a></td>
    
      </tr>
    
		

			<?php
            $i++;
            }
            ?>
                                  
                   
 </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- DataTable with Hover -->

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




<div class="modal fade" id="attribute" tabindex="-1" role="dialog" aria-labelledby="attribute" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="submit-loader">
                <img  src="https://product.geniusocean.com/tradegenius/assets/images/BWZuw2HJ1661832829.gif" alt="">
            </div>

            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        <p class="text-center">You are about to delete this User. Every informtation under this user will be deleted.</p>
        <p class="text-center">Do you want to proceed?</p>
    </div>
    <div class="modal-footer">
        <a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
        <a href="javascript:;" class="btn btn-danger btn-ok">Delete</a>
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
                                <input type="email" class="form-control" id="eml1" name="to" placeholder="Email" readonly value="" required="">
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

  
<script type="text/javascript">
    'use strict';

        var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               searching: false,
               ajax: 'https://product.geniusocean.com/tradegenius/admin/users/datatables',
               columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'status',searchable: false, orderable: false},
            			{ data: 'action', searchable: false, orderable: false }
                     ],
                language : {
                    processing: '<img src="https://product.geniusocean.com/tradegenius/assets/images/BWZuw2HJ1661832829.gif">'
                }
            });


</script>


</body>

</html>
