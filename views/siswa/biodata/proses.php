<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/SISSMKN2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php"); ?>
<?php $db = new Kesiswaan(); ?>
<?php
$aksi = $_GET['aksi'];
 if($aksi == "edit"){
    $db->editdu(
        $_POST['nis'],
        $_POST['nisn'],
        $_POST['namaSiswa'],
        $_POST['jk'],
        $_POST['tempatLahirSiswa'],
        $_POST['tanggalLahirSiswa'],
        $_POST['agamaSiswa'],
        $_POST['emailSiswa'],
        $_POST['hpSiswa'],
        $_POST['teleponSiswa'],
        $_POST['pass'],
        $_POST['anakKe'],
        $_POST['bahasa'],
        $_POST['jenisAnak'],
        $_POST['jsa'],
        $_POST['jsk'],
        $_POST['jst'],
        $_POST['kewarganegaraanSiswa'],
        $_POST['thnAjaranSiswa'],
        '0',

        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',

        $_POST['citacita'],
        $_POST['hobi'],
        $_POST['kesenian'],
        $_POST['olahraga'],
        $_POST['organisasi'],
        $_POST['prestasi'],

        $_POST['namaA'],
        $_POST['agamaA'],
        $_POST['alamatA'],
        $_POST['kewarganegaraanA'],
        $_POST['noKTPA'],
        $_POST['teleponA'],
        $_POST['pekerjaanA'],
        $_POST['pendidikanA'],
        $_POST['penghasilanA'],
        $_POST['tglLahirA'],
        $_POST['tmptLahirA'],
        $_POST['ketHidupA'],

        $_POST['namaI'],
        $_POST['agamaI'],
        $_POST['alamatI'],
        $_POST['kewarganegaraanI'],
        $_POST['noKTPI'],
        $_POST['teleponI'],
        $_POST['pekerjaanI'],
        $_POST['pendidikanI'],
        $_POST['penghasilanI'],
        $_POST['tglLahirI'],
        $_POST['tmptLahirI'],
        $_POST['ketHidupI'],

        $_POST['namaW'],
        $_POST['agamaW'],
        $_POST['alamatW'],
        $_POST['kewarganegaraanW'],
        $_POST['noKTPW'],
        $_POST['teleponW'],
        $_POST['pekerjaanW'],
        $_POST['pendidikanW'],
        $_POST['penghasilanW'],
        $_POST['tglLahirW'],
        $_POST['tmptLahirW'],

        $_POST['berat'],
        $_POST['tinggi'],
        $_POST['golDarah'],
        $_POST['kelainan'],
        $_POST['rPenyakit'],

        '',
        '',
        '',

        $_POST['alamatSiswa'],
        $_POST['jarak'],
        $_POST['kabupatenSiswa'],
        $_POST['kecamatanSiswa'],
        $_POST['kelurahanSiswa'],
        $_POST['provinsiSiswa'],
        $_POST['rt'],
        $_POST['rw'],
        $_POST['tinggalDgn'],
        $_POST['alamatM'],
        $_POST['kecamatanM'],
        $_POST['kabupatenM'],
        $_POST['kondisiRumah'],
        $_POST['kondisiFisik'],
        $_POST['transportasi'],

        $_POST['tamatanDari'],
        $_POST['lamaBelajar'],
        $_POST['noPesertaUAN'],
        $_POST['noIjazahSMP'],
        $_POST['noSKHUNSMP'],
        $_POST['tglIjazahSMP'],
        $_POST['tglSKHUNSMP']


        );
    // print_r($_POST['tinggalDgn']);
    //     die();
    header("location:http://localhost:8080/SISSMKN2/views/kesiswaan/biodata/index.php");
     
 }elseif ($aksi == "tambah") {
    $db->tambahdu(
        $_POST['nis'],
        $_POST['nisn'],
        $_POST['namaSiswa'],
        $_POST['namaPanggilan'],
        $_POST['jk'],
        $_POST['tempatLahirSiswa'],
        $_POST['tanggalLahirSiswa'],
        $_POST['agamaSiswa'],
        $_POST['emailSiswa'],
        $_POST['hpSiswa'],
        $_POST['teleponSiswa'],
        $_POST['pass'],
        $_POST['anakKe'],
        $_POST['bahasa'],
        $_POST['jenisAnak'],
        $_POST['jsa'],
        $_POST['jsk'],
        $_POST['jst'],
        $_POST['kewarganegaraanSiswa'],
        $_POST['jurusan'],
        $_POST['thnAjaranSiswa'],
        '0',

        base64_encode(file_get_contents($_FILES['foto']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanAkte']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanIjazah']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanKIP']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanKK']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanKPS']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanKTPOrtu']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanNISN']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanSKHUN']['tmp_name'])),
        base64_encode(file_get_contents($_FILES['scanSKHUS']['tmp_name'])),
        'sek error',

        // base64_encode(file_get_contents($_FILES['scanAkte']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanIjazah']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanKIP']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanKK']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanKPS']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanKTPOrtu']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanNISN']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanSKHUN']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanSKHUS']['tmp_name'])),
     //    base64_encode(file_get_contents($_FILES['scanSuratKet']['tmp_name'])),

        $_POST['citacita'],
        $_POST['hobi'],
        $_POST['kesenian'],
        $_POST['olahraga'],
        $_POST['organisasi'],
        $_POST['prestasi'],

        '',
        '',
        '',
        '',
        '',
        '',
        '',

        $_POST['namaA'],
        $_POST['agamaA'],
        $_POST['alamatA'],
        $_POST['kewarganegaraanA'],
        $_POST['noKTPA'],
        $_POST['teleponA'],
        $_POST['pekerjaanA'],
        $_POST['pendidikanA'],
        $_POST['penghasilanA'],
        $_POST['tglLahirA'],
        $_POST['tmptLahirA'],
        $_POST['ketHidupA'],

        $_POST['namaI'],
        $_POST['agamaI'],
        $_POST['alamatI'],
        $_POST['kewarganegaraanI'],
        $_POST['noKTPI'],
        $_POST['teleponI'],
        $_POST['pekerjaanI'],
        $_POST['pendidikanI'],
        $_POST['penghasilanI'],
        $_POST['tglLahirI'],
        $_POST['tmptLahirI'],
        $_POST['ketHidupI'],

        $_POST['namaW'],
        $_POST['agamaW'],
        $_POST['alamatW'],
        $_POST['kewarganegaraanW'],
        $_POST['noKTPW'],
        $_POST['teleponW'],
        $_POST['pekerjaanW'],
        $_POST['pendidikanW'],
        $_POST['penghasilanW'],
        $_POST['tglLahirW'],
        $_POST['tmptLahirW'],

        $_POST['berat'],
        $_POST['tinggi'],
        $_POST['golDarah'],
        $_POST['kelainan'],
        $_POST['rPenyakit'],

        '',
        '',
        '',
        '',

        '',
        '',

        $_POST['alamatSiswa'],
        $_POST['jarak'],
        $_POST['kabupatenSiswa'],
        $_POST['kecamatanSiswa'],
        $_POST['kelurahanSiswa'],
        $_POST['provinsiSiswa'],
        $_POST['rt'],
        $_POST['rw'],
        $_POST['tinggalDgn'],
        $_POST['alamatM'],
        $_POST['kecamatanM'],
        $_POST['kabupatenM'],
        $_POST['kondisiRumah'],
        $_POST['kondisiFisik'],
        $_POST['transportasi'],

        $_POST['tamatanDari'],
        $_POST['lamaBelajar'],
        $_POST['noPesertaUAN'],
        $_POST['noIjazahSMP'],
        $_POST['noSKHUNSMP'],
        $_POST['tglIjazahSMP'],
        $_POST['tglSKHUNSMP'],
        '2'
        );
    header("location:http://localhost:8080/SISSMKN2/views/kesiswaan/biodata/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
    header("location:http://localhost/ta_cendana_javiera/views/produksi/production_order/index.php");
 }
?>