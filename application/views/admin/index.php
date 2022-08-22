  
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
                            <div class="col-lg-6">

                            <a href="" class="btn btn-success mb-4"> Download All</a>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">SPKL</th>
                                    <th scope="col">Action</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($menu as $m) : ?>
                                    <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $m['menu']; ?> </td>
                                    <td>
                                        <a href="" class="badge badge-info"> Show </a>
                                        <a href="" class="badge badge-primary"> Edit </a>
                                        <a href="" class="badge badge-success"> Download </a>
                                    </td>

                                    </tr>
                                    <?php $i++ ; ?>
                                    <?php endforeach; ?>
                                    
                                </tbody>
                                </table>
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
