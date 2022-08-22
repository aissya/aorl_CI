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

                          <div class="row">
                              <div class="col-sm-12 col-md-3">
                                  <!-- Topbar Search -->
                                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                      <div class="input-group">
                                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                          <div class="input-group-append">
                                              <button class="btn btn-primary" type="button">
                                                  <i class="fas fa-search fa-sm"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>



                          

                              <div class="table-responsive ">
                                  <table border="1" class="table align-items-center table-flush" id="">
                                      <thead class="thead-light">
                                          <tr class="text-center">
                                              <!-- <th rowspan="2">No</th>
                                              <th rowspan="2">Nama Pekerja</th>
                                              <th rowspan="2">Training Confined Space</th>
                                              <th rowspan="2">ID Card</th> -->
                                              <th colspan="6">Perintah Kerja Lembur</th>
                                              <th colspan="3">Realisasi Kerja Lembur</th>
                                              <!-- <th colspan="2">Peralatan Kerja</th>
                                              <th colspan="3">Sumber Daya yang Digunakan</th>
                                              <th colspan="3">Pengawasan oleh PT AISIN INDONESIA</th> -->
                                          </tr>
                                          <tr class="text-center">
                                              <th rowspan="2">No</th>
                                              <th rowspan="2">Nama</th>
                                              <th rowspan="2">NPK</th>
                                              <th colspan="2">Waktu</th>
                                              <th rowspan="2">Sub Section</th>
                                              <!-- <th>Paraf/TTD</th> -->
                                              <th colspan="2">Waktu</th>
                                              <th rowspan="2">Catatan</th>
                                              <!-- <th>Air</th>
                                              <th>User</th>
                                              <th>P2K3L</th>
                                              <th>Safety</th> -->
                                          </tr>
                                          <tr class="text-center">
                                              <th>Dari</th>
                                              <th>Sampai</th>
                                              <th>Dari</th>
                                              <th>Sampai</th>
                                          </tr>
                                      </thead>

                                  </table>
                              </div>
                          
                        </table>
                  </div>



                 
              </div>
          </div>
      </div>
  </div>
  <!--Row-->




  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->