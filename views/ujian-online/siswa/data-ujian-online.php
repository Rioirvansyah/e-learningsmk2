<?php 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/ujian-online/ujian-online.php");
$obj = new Ujian_online();
$show1 = $obj->show_ujian();
$show = $obj->show_ujian_waktu();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">E-learning</a></li>
                            <li class="active">List Ujian Online</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            foreach ($show as $data) {
            $date = date('l', strtotime($data['tgl_ujian']));
            $daylist = array('Sunday' => 'Minggu',
                             'Monday' => 'Senin',
                             'Tuesday' => 'Selasa',
                             'Wednesday' => 'Rabu',
                             'Thursday' => 'Kamis',
                             'Friday' => 'Jumat',
                             'Saturday' => 'Sabtu' 
                            ); ?>

            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12"> 
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h4><?php echo $data['jenis_ujian']; ?></h4></strong>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Kelas</td>
                                    <td>: <?php echo $data['nama_kelas']; ?></td>
                                </tr>
                                <tr>
                                    <td>Mata Pelajaran</td>
                                    <td>: <?php echo $data['nama_mapel']; ?></td>
                                </tr>
                                <tr>
                                    <td width="200px">Hari/Tanggal </td>
                                    <td>: <?php echo $daylist[$date]; ?>, <?php echo $data['tgl_ujian']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>: <?php echo $data['jam_mulai']; ?> - <?php echo $data['jam_selesai']; ?></td>
                                </tr>
                            </table>
                        </div>
                     </div>
                      <div class="card">
                        <div class="card-header">
                            <strong class="card-title">PETUNJUK UMUM</strong>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>1. </td>
                                    <td>Periksalah Naskah Soal yang Anda terima sebelum mengerjakan soal yang meliputi</td>
                                </tr>
                                <tr>
                                    <td>a. </td>
                                    <td>Kelengkapan jumlah halaman atau urutannya.</td>
                                </tr>
                            </table>
                        </div>
                            <div class="card-footer" align="right">
                                <a href="data-ujian-online1.php?id_ujian_online=<?php echo $data["id_ujian_online"]; ?>"> <button type="submit" class="btn btn-primary btn-sm" id="tambah" name="tambah">
                                  <i class="fa fa-dot-circle-o"></i> Next
                                </button></a>
                            </div>
                     </div>
                  </div>
                </div>

            </div><!-- .animated -->
        </div>
       <?php } 
       foreach ($show1 as $data1) {
        $date = date('l', strtotime($data1['tgl_ujian']));
            $daylist = array('Sunday' => 'Minggu',
                             'Monday' => 'Senin',
                             'Tuesday' => 'Selasa',
                             'Wednesday' => 'Rabu',
                             'Thursday' => 'Kamis',
                             'Friday' => 'Jumat',
                             'Saturday' => 'Sabtu' 
                            );
       if ($data1['tgl_ujian'] != date("Y-m-d")) { ?>
            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12"> 
                    <div class="card">
                        <div class="card-body">
                        <strong><h4><center>COMING SOON</h4></center></strong>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h4>Ujian Terdekat</h4></strong>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Kelas</td>
                                    <td>: <?php echo $data1['nama_kelas']; ?></td>
                                </tr>
                                <tr>
                                    <td>Mata Pelajaran</td>
                                    <td>: <?php echo $data1['nama_mapel']; ?></td>
                                </tr>
                                <tr>
                                    <td width="200px">Hari/Tanggal </td>
                                    <td>: <?php echo $daylist[$date]; ?>, <?php echo $data1['tgl_ujian']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>: <?php echo $data1['jam_mulai']; ?> - <?php echo $data1['jam_selesai']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>

        <?php } } ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>