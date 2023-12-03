<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><?php echo $titulo; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    

    </section>
    <section>
    <div class="container mt-5 mb-5">
    <div class="row justify-content-center"> <!--clase para aliniar las cajas-->
    
        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-2">
                <div class="card">
                    

                <div class="card-body">
                <div class="card-header"><center>Total de Administradores</center></div>

                <?php
        // Conectarse a la base de datos 
        $conexion = new mysqli("localhost", "root", "", "alta_usuario");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("La conexión a la base de datos falló: " . $conexion->connect_error);
        }

        // Consulta SQL para contar los registros
        $consulta = "SELECT COUNT(*) as total_registros FROM usuarios";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $total_registros = $fila["total_registros"];

            echo "<div class='card-body'>";
            echo "<p> <center><FONT SIZE=8>{$total_registros}</FONT></p>";
            echo "</div>";
        } else {
            echo "No se encontraron registros en la base de datos.";
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
        ?>
                </div>
            </div>
        </div>



        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
            <div class="card">


            <div class="card-body">
            <div class="card-header"><center>Total de Plantas</center></div>
            <h5 class="card-title"><center>Registradas en el Herbario</center></h5>
            
            <?php
        // Conectarse a la base de datos (reemplaza con tus propios datos de conexión)
        $conexion = new mysqli("localhost", "root", "", "alta_usuario");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("La conexión a la base de datos falló: " . $conexion->connect_error);
        }

        // Consulta SQL para contar los registros
        $consulta = "SELECT COUNT(*) as total_registros FROM registroplantas";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $total_registros = $fila["total_registros"];

            echo "<div class='card-body'>";
            echo "<p><FONT SIZE=8><center>{$total_registros}</center></FONT></p>";
            echo "</div>";
        } else {
            echo "No se encontraron registros en la base de datos.";
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
        ?>

           
    
        </div>
    </div>
</section>
</div>