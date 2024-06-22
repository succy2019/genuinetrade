<?php include('header.php') ?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            

    <div class="card">
        <div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3">Withdraw Request</h5>
        <ol class="breadcrumb py-0 m-0">
            <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>

            <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/users">Withdraw Request</a></li>
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
                    <th>Withdate Date</th>
                    <th>Withdraw Status</th>
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
    <td data-label="Action"><a href="withapp.php?UID=<?= $deps['id'];?>" class="btn btn-sm btn-primary">Approve</a></td>
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

    <div class="modal fade confirm-modal" id="details" tabindex="-1" role="dialog"
    aria-labelledby="statusModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Withdraw Request Details
            </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
        <a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">Back</a>
        </div>
    </div>
    </div>
    </div>


    

<div class="modal fade confirm-modal" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block">Accpet Withdraw</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center">You are about to accept this Withdraw.</p>
                <p class="text-center">Do you want to proceed?</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success btn-ok">Accept</a>
            </div>

        </div>
    </div>
</div>
<div class="modal fade status-modal" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block">Reject Withdraw</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center">You are about to reject this Withdraw.</p>
                <p class="text-center">Do you want to proceed?</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Reject</a>
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
"use strict";
var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               searching: false,
               ajax: 'https://product.geniusocean.com/tradegenius/admin/users/withdraws/datatables',
               columns: [

                        { data: 'email', name: 'email' },
                        {data:'phone',name: 'phone'},
                        {data:'amount',name:'amount'},
                        {data:'method',name:'method'},
                        {data: 'created_at',name:'created_at'},
                        { data: 'status',searchable: false, orderable: false},
            			{ data: 'action', searchable: false, orderable: false }
                     ],
                language : {

                }
            });

            $(document).on('click', '#applicationDetails', function () {
      let detailsUrl = $(this).data('href');
      $.get(detailsUrl, function( data ) {
        $( "#details .modal-body" ).html( data );
      });
    })





</script>


</body>

</html>
