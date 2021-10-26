<?php

include 'global/conexion.php';
include 'global/metods.php';
include 'global/conectors.php';


?>
<?php include 'templates/header.php'; ?>

<div class="row" style="margin-top: 2%;">
    <center>
        <h1>Ingreso Empleados</h1>
    </center>

    <div class="col-12" style="margin-top: 2%;">
        <form action="" method="POST">
            <div class="form-group">
                <h3>Ingreso</h3>
                <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpCode" placeholder="Codigo">
            </div>
            <br>
            <button type="submit" name="button" value="ingress" class="btn btn-success">Ingreso</button>
            <br>
            <br>


        </form>

        

        <?php if ($mensaje == "Ingreso autorizado") { ?>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <?php echo $mensaje; ?>
            </div>

        <?php }
        if ($mensaje == "Ingreso denegado") { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>







        <?php include 'templates/footer.php'; ?>