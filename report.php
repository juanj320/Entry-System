<?php

include 'global/conexion.php';
include 'global/metods.php';
include 'global/conectors.php';


?>
<?php include 'templates/header.php'; ?>

<center><h2>Reporte Ingreso y Salida de Empleados</h2></center>

<table class="table table-hover mt-4">
    <thead>
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA INGRESO</th>
            <th scope="col">FECHA SALIDA</th>
        </tr>
    </thead>
    <tbody>
    <?php

        $con = new metods;
        $sql = "SELECT * from ingreso,salida LIMIT 5";
        

        $data = $con->show($sql);
        

        foreach ($data as $show) {

    ?>
        <tr>
          <th><?php echo $show['codigo'] ?></th>
          <th><?php echo $show['nombre'] ?></th>
          <th><?php echo $show['ingreso'] ?></th>
          <th><?php echo $show['salida'] ?></th>
        </tr>
        <?php } ?>
    </tbody>
</table>



<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<?php include 'templates/footer.php';
