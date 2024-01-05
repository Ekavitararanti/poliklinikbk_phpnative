<?php
    include_once 'koneksi.php';
    include_once 'model/Pasien.php';
    //tangkap request form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noktp = $_POST['no_ktp'];
    $nohp = $_POST['no_hp'];
    $nonm = $_POST['no_nm'];
    //step 2 simpan ke array
    $data = [
        $nama,
        $alamat,
        $noktp,
        $nohp,
        $nonm
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Pasien();
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
            header('location:index.php?hal=pasien');
            break;

        case 'hapus':
            unset($data);
            //tangkap hidden field idx
            $model->hapus($_POST['idx']);
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=pasien');
?>