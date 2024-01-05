<?php
    $id_dokter = $_REQUEST['id'];
    $model = new Dokter();
    $dokter = $model->getDokter($id_dokter);
?>

<main class="mdl-layout__content ui-form-components">

<div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

    <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h5 class="mdl-card__title-text text-color--white">PROFILE INFO</h5>
            </div>
            <div class="mdl-card__supporting-text">
                <form class="form form--basic">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" value="<?=$dokter['nama'] ?>" id="profile-floating-first-name" disabled>
                                <label class="mdl-textfield__label" for="profile-floating-first-name">NAMA DOKTER</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" value="<?=$dokter['alamat'] ?>" id="profile-floating-last-name" disabled>
                                <label class="mdl-textfield__label" for="profile-floating-last-name">ALAMAT</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                            <input class="mdl-textfield__input" type="text" value="<?=$dokter['no_hp'] ?>" id="profile-floating-e-mail" id="profile-floating-e-mail" disabled>
                                <label class="mdl-textfield__label" for="floating-e-mail">NOMOR HP</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" value="<?=$dokter['nama_poli'] ?>" id="profile-floating-e-mail" disabled>
                                <label class="mdl-textfield__label" for="floating-e-mail">NAMA POLI</label>
                            </div>
                            
                        </div>
                    </div>
                </form>
                <li class="mdl-list__item">
                                <a href="index.php?hal=dokter">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                        <i class="material-icons">arrow_back</i>
                                        Kembali
                                    </button>
                                </a>
                            </li>
            </div>
        </div>
    </div>
</div>

</main>