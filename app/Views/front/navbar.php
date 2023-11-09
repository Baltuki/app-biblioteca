
    <?php
    $session = session();
    $nombre = $session->get('usuario');
    $perfil = $session->get('perfil_id');
    ?>

    <nav  class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand white text-light" href="<?php echo base_url('principal'); ?>">
                <img src="./assets/img/books.png" id="principal-icon" alt="">Principal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if (session()->perfil_id == 1): ?>
                <div id="btnadmin" class=" bg-dark text-light">
        <a href="">ADMIN: <?php echo $nombre; ?></a>
    </div>
            <?php endif; ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="<?php echo base_url('quienes'); ?>">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('acerca'); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="ftr">
                            Mi perfil
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-light" href="<?php echo base_url('login'); ?>">Login</a></li>
                            <li><a class="dropdown-item text-light" href="<?php echo base_url('registro'); ?>">Registro</a></li>
                            <li><a class="dropdown-item text-light" href="<?php echo base_url('/logout'); ?>">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php if (session()->perfil_id == 2): ?>
                <div id="btnclient" class="btn btn bg-dark text-light">
        <a  href="">CLIENTE: <?php echo $nombre; ?></a>
    </div>
            <?php endif; ?>
        </div>
    </nav>
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
