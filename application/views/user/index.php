  <!-- Begin Page Content -->
  <div class="container-fluid">

      <div class="row">
          <!-- Datatables -->
          <div class="col-lg-12">
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h3 class="m-0 font-weight-bold text-primary"><?= $title; ?></h3>
                  </div>
                  <div class="table-responsive p-3">
                      <table class="table align-items-center table-flush" id="dataTable">


                          <!-- Page Heading -->

                          <div class="row">
                              <div class="col-lg-">
                                  <?= $this->session->flashdata('message'); ?>
                              </div>
                          </div>
                          <div class="card mb-3 col-lg-8">
                              <div class="row g-0">
                                  <div class="col-md-4 mt-2">
                                      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body">
                                          <h5 class="card-title"><?= $user['name']; ?></h5>
                                          <p class="card-text"><?= $user['email']; ?></p>
                                          <p class="card-text"><?= $user['NPK']; ?></p>
                                          <p class="card-text"><?= $user['Address']; ?></p>
                                          <p class="card-text"><small class="text-muted">Create Account Since <?= date('d F Y', $user['date_created']); ?></small></p>
                                      </div>
                                  </div>
                              </div>
                          </div>



                      </table>
                  </div>
              </div>
          </div>
      </div>
      <!--Row-->



  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->