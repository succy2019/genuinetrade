<?php include('header.php') ?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            
<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
	<h5 class=" mb-0 text-gray-800 pl-3">Trade Method</h5>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Trade</a></li>
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


	<div class="card mb-4">
	  <div class="table-responsive p-3">
		<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
    <thead class="thead-light">
                <tr>
          
                   
                    <th>WalletName</th>
                    <th>subtitle</th>
                    <th>Deposit Status</th>
                    
                </tr>
              </thead>
      <tbody>


<?php
                    // $i=1;
                foreach($AllWall as $deps)
                {

                ?>
<tr>
		
        <td data-label="No"><?= $deps['walletname'];?></td>
        <td data-label="Amount"><?= $deps['subtitle'];?></td>
        <td data-label="Amount"><?= $deps['walletId'];?></td>

      </tr>
    
		

			<?php
            // $i++;
            }
            ?>
                                  
                   
 </tbody>


		</table>
	  </div>
	</div>
  </div>
</div>


<div class="modal fade confirm-modal" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
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



<div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
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

  
    <script type="text/javascript">
	    "use strict";

		var table = $('#geniustable').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            searching: false,
            ajax: 'https://product.geniusocean.com/tradegenius/admin/trade/method/datatables',
            columns: [
                    { data: 'photo', name: 'photo' , searchable: false, orderable: false},
                    { data: 'name', name: 'name' },
                    { data: 'symbol', name: 'symbol' },
                    { data: 'action', searchable: false, orderable: false }
                ],
            language : {
                processing: '<img src="https://product.geniusocean.com/tradegenius/assets/images/BWZuw2HJ1661832829.gif">'
            }
        });

		$(function() {
            $(".btn-area").append('<div class="col-sm-12 col-md-4 pr-3 text-right">'+
                '<a class="btn btn-primary" href="addwall.php">'+
                    '<i class="fas fa-plus"></i> Add New'+
                '</a>'+
            '</div>');
        });

</script>


</body>

</html>
