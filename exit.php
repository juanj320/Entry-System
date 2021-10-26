<?php

include 'global/conexion.php';
include 'global/metods.php';
include 'global/conectors.php';


?>
<?php include 'templates/header.php'; ?>


<div class="row" style="margin-top: 2%;">
    <center>
        <h1>Salida Empleados</h1>
    </center>

    <div class="col-12" style="margin-top: 2%;">
        <form action="exit.php" method="POST">
            <div class="form-group">
                <h3>Salida</h3>
                <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpCode" placeholder="Codigo">
            </div>
            <br>
            <button type="submit" name="button" value="egress" class="btn btn-warning">Salida</button>
            <br>
            <br>

        </form>

        <?php if ($mensaje == "Empleado Salio") { ?>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <?php echo $mensaje; ?>
            </div>

        <?php }
        if ($mensaje == "No se encontro al Empleado") { ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>
    </div>
</div>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php

include 'templates/footer.php'; ?>