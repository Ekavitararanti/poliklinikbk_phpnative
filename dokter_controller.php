<?php
    include_once 'koneksi.php';
    include_once 'model/Dokter.php';
    //tangkap request form
    $nama_dokter = $_POST['nama'];
    $alamat_dokter = $_POST['alamat'];
    $nohp = $_POST['no_hp'];
    $poli = $_POST['nama_poli'];
    //step 2 simpan ke array
    $data = [
        $nama_dokter,
        $alamat_dokter,
        $nohp,
        $poli
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Dokter();
    $tombol = $_REQUEST['proses'];
    switch ($tombol){
        case 'simpan':
            $model->simpan($data);
            break;

        case 'ubah':
            //tangkap hidden field idx
            $data[] = $_POST['idx']; // untuk klausa whre id=?
            $model->ubah($data);
            break;

        default:
            header('location:index.php?hal=dokter');
            break;

        case 'hapus':
            unset($data);
            //tangkap hidden field idx
            $model->hapus($_POST['idx']);
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=dokter');
?>