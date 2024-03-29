<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/tbl_perusahaan.php");
$tbl_perusahaan = new t_prakerin();
?>



<?php require($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data Prakerin</a></li>
                            <li class="active">Data Siswa</li>
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
                            <strong class="card-title">Form</strong> Data Siswa
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                               


                                  <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_perusahaan.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                           
                                            
                                          </div>
                                           <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="nama" name="nama_prakerin" placeholder="Masukkan Nama"  class="form-control"value="<?= $data['nama_prakerin']; ?>"></div>
                                          </div>
                                           
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="alamat" name="alamat_prakerin" placeholder="Masukan Alamat" class="form-control"value="<?= $data['alamat_prakerin']; ?>"></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telpon Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="telp_prakerin" name="telp_prakerin" placeholder="Masukan No Telp" class="form-control" value="<?= $data['telp_prakerin']; ?>"></div>
                                          </div>
                                          
                                      </div>
                                      
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kota Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kota_prakerin" name="kota_prakerin" placeholder="Masukan kota prakerin" class="form-control" value="<?= $data['kota_prakerin']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="program" name="program" placeholder="Masukan Program" class="form-control" value="<?= $data['program']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="pembimbing" name="pembimbing" placeholder="Masukan Nama Pembimbing" class="form-control" value="<?= $data['pembimbing']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Direktur Perusahaan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="direktur" name="direktur" placeholder="Masukan Nama Direktur" class="form-control" value="<?= $data['direkttur']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email Perusahaan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="Masukan Email Perusahaan" class="form-control" value="<?= $data['email']; ?>"></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Website</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="website" name="website" placeholder="Masukan Website Perusahaan" class="form-control" value="<?= $data['website']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="th_ajar" name="th_ajar" placeholder="Masukan Tahun Ajaran" class="form-control" value="<?= $data['th_ajar']; ?>"></div>
                                          </div>
                                          
                                          

                                      </div>
                                          
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div></form>
                     <!-- .card -->

                  </div><!--/.col-->

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  