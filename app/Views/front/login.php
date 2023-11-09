
      <div class="container bg-darkmt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <h2 class="text-center">Inicio de Sesión</h2>
                <form>
                    <div class="form-group">
                        <label for="username">Corre electronico</label>
                        <input  type="text" class="form-control" id="username" placeholder="Introduce tu usuario">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Ingresar">
                    <a href="<?php echo base_url('/login') ?> "type="submit" class="btn btn-danger" >Cancelar</a>
                    <span style="margin-left:3px;">¿No tienes cuenta?<a style="margin-left: 5px;" href="<?php echo base_url('/registro') ?>">Registrate aquí.</a></span>
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>