

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Cetak Absensi Mata Pelajaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="jurnalkelas.php">Absensi Mata Pelajaran</a></li>
                            <li class="active">Cetak Absensi Mata Pelajaran</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Cetak Absensi Mata Pelajaran</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="awal3.php" method="post" class="form-horizontal">
                                      
                                          <div class="col-6">
                                              <div class="col col-md-4"><label for="text-input" class=" form-control-label" > <strong class="card-title">Tanggal Absensi </strong></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tgl" class="form-control" value="<?= date('Y-m-d');?>"required></div>
                                          </div>
                                      </div>
                                      
                            </div>
                            </div>
                            </div>
                    <div class="card-footer">

                     <strong> <button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Lanjutkan </button></strong>
                      
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  