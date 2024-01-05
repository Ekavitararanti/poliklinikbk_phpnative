<?php
  //ciptakan objek dari class Pegawai
  $obj_dokter = new Dokter();
  $obj_poli = new Poli();
  //panggil fungsi untuk menampilkan data pegawai
  $data_poli = $obj_poli->dataPoli();
  //PROSES EDIT DATA
  $id_edit = isset($_REQUEST['id_edit']) ? $_REQUEST['id_edit'] : null;
  $cus = !empty($id_edit) ? $obj_dokter->getDokter($id_edit) : array();
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>
<main class="mdl-layout__content ui-form-components">

<div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

    <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h5 class="mdl-card__title-text text-color--white">Update Pasien</h5>
            </div>
            <div class="mdl-card__supporting-text">
                <form class="form form--basic" action="dokter_controller.php" method="POST">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone form__article">
                            <div class="mdl-textfield mdl-js-textfield full-size">
                                <input class="mdl-textfield__input" type="text" id="nama_dokter" name="nama" value="<?= $cus['nama'] ?>">
                                <label class="mdl-textfield__label" for="nama">NAMA DOKTER</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield full-size">
                                <input class="mdl-textfield__input" type="text" value="<?= $cus['alamat'] ?>" id="alamat_dokter" name="alamat">
                                <label class="mdl-textfield__label" for="alamat">ALAMAT</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield full-size">
                                <input class="mdl-textfield__input" type="number" value="<?= $cus['no_hp'] ?>" id="nohp" name="no_hp">
                                <label class="mdl-textfield__label" for="no_hp">NOMOR HP</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield full-size">
                            <select class="form-select" id="nama_poli" name="nama_poli" aria-label="Default select example">
                                <option selected>-- PILIH POLI --</option>
                                <?php
                                    foreach($data_poli as $poli){
                                        //edit jadwal
                                        $sel1 = $cus['id_poli'] == $poli['id'] ? 'selected' : '';
                                ?>
                                <option value="<?= $poli['id'] ?>" <?= $sel1 ?>><?= $poli['nama_poli'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            </div>
                            <li class="mdl-list__item">
                                <?php
                                    if(empty($id_edit)){// modus entri data baru, form dalam keadaan kosong
                                ?>
                                <button type="submit" name="proses" value="simpan" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    Simpan
                                </button>
                                <?php 
                                } 
                                    else{
                                ?>
                                <button type="submit" name="proses" value="ubah" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    Edit
                                </button>
                                <input type="hidden" name="idx" value="<?= $id_edit ?>">
                                <?php } ?>
                                <button type="submit" name="proses" value="batal" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-red">
                                    Batal
                                </button>
                            </li>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>