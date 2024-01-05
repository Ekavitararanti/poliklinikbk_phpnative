<?php
    include_once 'koneksi.php';
    include_once 'model/Obat.php';
    //tangkap request form
    $namaobat = $_POST['nama_obat'];
    $kemasan = $_POST['kemasan'];
    $harga = $_POST['harga'];
    //step 2 simpan ke array
    $data = [
        $namaobat,
        $kemasan,
        $harga
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Obat();
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
            header('location:index.php?hal=obat');
            break;

        case 'hapus':
            unset($data);
            //tangkap hidden field idx
            $model->hapus($_POST['idx']);
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=obat');
?>