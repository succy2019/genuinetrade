<?php include('header.php') ?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            
<div class="d-sm-flex align-items-center justify-content-between mb-4 py-3">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <ol class="breadcrumb m-0 py-0">
      <li class="breadcrumb-item"><a href="https://product.geniusocean.com/tradegenius/admin/dashboard">Dashboard</a></li>
    </ol>
  </div>

    
  <div class="row mb-3">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Active Customers</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Alluser; ?> </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Blocked Customers</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-danger"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Blogs</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">3 </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-fw fa-newspaper fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Trade Method</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">8 </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-fw fa-newspaper fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Deposits</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">
              <?php echo number_format($depcount,2) ?>    
              </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Deposit Amount</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo number_format($depcount,2) ?> $</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Withdraw Amount</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">1707.37$</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Withdraw Charge Amount</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">63.25$</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Referral Bonus</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">15$</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Balance Transfer</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">6 </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Balance Transfer Amount</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">3440$ </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Trades</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">370 </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Trade Amount</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">131440.28$ </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Request Money</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">0$</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Transactions</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800"><?php echo number_format($Allcount,2) ?> </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Tickets</div>
                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">3 </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <!--Row-->

  <div class="row mb-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Recent Joined Users</h6>
        </div>
        
          <div class="table-responsive table--mobile-lg">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Serial No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <td data-label="Serial No">1</td>
                    <td data-label="Name">456456564</td>
                    <td data-label="Email">456456564@gmail.com</td>
                    <td data-label="Status"><span class="badge badge-success">activated</span></td>
                    <td data-label="Action"><a href="https://product.geniusocean.com/tradegenius/admin/user/210/show" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                                  
                                  
                   
                              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
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
