<div class="container mt-5 bg-dark text-light bg-dark">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center text-light">Inicio de Sesión</h2>
        </div>
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Introduce tu usuario">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Introduce tu contraseña">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Ingresar">
            <a href="<?php echo base_url('login') ?>" class="btn btn-danger">Cancelar</a>
            <span style="margin-left:3px;">¿No tienes cuenta?<a style="margin-left: 5px;" href="<?php echo base_url('/registro') ?>">Registrate aquí.</a></span>
        </form>
    </div>
</div>
<style>
        input{
            margin-top:10px;
        }
        a{
            margin-top:10px;
        }
    </style>