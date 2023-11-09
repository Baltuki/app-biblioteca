<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style/style.css">
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <br><br>
            <?php if (session()->perfil_id == 1): ?>
                <div class="center">
                    <img id="adminicon" class="center" height="100px" width="100px" src="<?= base_url('assets/img/icon-admin.png'); ?>" alt="">
                </div>
            <?php else: ?>
                <div class="center">
                    <img id="usericon" src="<?= base_url('assets/img/user-128.png'); ?>" alt="" class="text-center" style="margin-left:37%" height="100px" width="100px">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
