<div class="container mt-5">
    <div class="row justify-content-center bg-dark text-light py-3">
        <div class="col-md-6">
            <h2 class="text-center">Registro</h2>

            <?php $validation = \Config\Services::validation(); ?> 
            <form method="post" action="<?php echo base_url('/enviar-form') ?>">

                <?= csrf_field(); ?>
                <?= csrf_field(); ?>

                <?php if (!empty(session()->getFlashdata('fail'))){ ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php } ?>

                <?php if (!empty(session()->getFlashdata('succes'))) {  ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('succes'); ?></div>
                <?php } ?>

                <div class="form-group">
                    <label >Nombre de usuario:</label>
                    <input name="usuario" type="text" class="form-control" id="username" placeholder="Nombre de usuario">
                    <?php if ($validation->getError('username')){ ?>
                        <div class="alert alert-danger mt-2">
                            <?php $error = $validation->getError('username'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>Nombre:</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
                    <?php if ($validation->getError('nombre')){ ?>
                        <div class="alert alert-danger mt-2">
                            <?php $error = $validation->getError('nombre'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">
                    <?php if ($validation->getError('apellido')){ ?>
                        <div class="alert alert-danger mt-2">
                            <?php $error = $validation->getError('apellido'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
                    <?php if ($validation->getError('email')){?>
                        <div class="alert alert-danger mt-2">
                            <?php $error = $validation->getError('email'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input name="pass" type="password" class="form-control" id="password" placeholder="Contraseña">
                    <?php if ($validation->getError('pass')){ ?>
                        <div class="alert alert-danger mt-2">
                            <?php $error = $validation->getError('pass'); ?>
                        </div>
                    <?php } ?>
                </div>
                <input href="<?php echo base_url('login') ?>" type="submit"value="Registrarse" class="btn btn-primary btn-block">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"

