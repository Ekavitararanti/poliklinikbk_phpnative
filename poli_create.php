<main class="mdl-layout__content ui-form-components">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text text-color--white">Tambah Data Poli</h5>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form class="form form--basic" action="poli_controller.php" method="POST">
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone form__article">
                                    <div class="mdl-textfield mdl-js-textfield full-size">
                                        <input class="mdl-textfield__input" type="text" id="namapoli" name="nama_poli">
                                        <label class="mdl-textfield__label" for="nama">NAMA POLI</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield full-size">
                                        <input class="mdl-textfield__input" type="text" id="keterangan_poli" name="keterangan">
                                        <label class="mdl-textfield__label" for="alamat">KETERANGAN</label>
                                    </div>
                                    <li class="mdl-list__item">
                                        <button type="submit" name="proses" value="simpan" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                            Tambah
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