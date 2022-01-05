<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <!-- JavaScript Bundle with Popper -->
    <!-- hola xddd -->
    <title>Aerolinea Kerv</title>
</head>
<body>
    <?phps
       require('conexion.php');
    ?>
    <div class="content">
        <header>
            <div class="menu">
                <div id="imagen">
                    <img src="img/kerv.png" alt="logo">
                </div>
                <nav id="top_nav">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="bi bi-house-door-fill"></i>Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalogo.php"><i class="bi bi-journal"></i>Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cloud-drizzle"></i>Clima</a>
                        </li>
                    </ul> 
                </nav>
            </div>
        </header>
        <section>
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="col">
                        <!--ingreso de paises-->
                        <h3><b>Registrar Vuelo</b></h3>
                        <!--opcion para ingresar el pais de origen o de salida-->
                        <h5>Desde:</h5>
                            <select name="paisesOrigen" id="paisesOrigen">
                                <option value="">Seleccione un pais</option>
                                <?php
                                    $consulta = "SELECT * FROM pais";
                                    $result = mysqli_query($conn,$consulta);
                                    while($imprimir = mysqli_fetch_array($result)){
                                        echo "<option value='".$imprimir['id']."'>".$imprimir['nombre']."</option>";
                                    }
                                ?>
                            </select>
                            <div id="listaCiudadesO"></div>
                            <br>
                            <!--opcion para ingresar el pais de llegada o de destino-->
                            <h5>Hacia:</h5>
                            <select name="paisesDestino" id="paisesDestino">
                            <option value="">Seleccione un pais</option>
                                <?php
                                    $consulta2 = "SELECT * FROM pais";
                                    $result2 = mysqli_query($conn,$consulta2);
                                    while($imprimir2 = mysqli_fetch_array($result2)){
                                        echo "<option value='".$imprimir2['id']."'>".$imprimir2['nombre']."</option>";
                                    }
                                ?>
                            </select>
                            <div name="listaCiudadesD" id="listaCiudadesD"></div>
                    </div>
                    <!--ingreso de fecha-->
                    <div class="col">
                    <br><br>
                        <!--opcion para seleccionar la fecha en que se saldrá del pais de origen-->
                        <h5>Fecha de Salida</h5>
                        <input type="date" name="salida" id="salida" placeholder="Salida" class="fecha">             
                        <br>
                        <!--opcion para seleccionar la fecha en que se regresará al pais de origen-->
                        <h5>Fecha de Regreso</h5>
                        <input type="date" name="llegada" id="llegada" placeholder="Llegada" class="fecha">
                        <!--hora salida-->
                        <h5>Hora Salida</h5>
                        <input type="text" name="horasalida" id="horasalida" placeholder="Hora de Salida" maxlength = "5">
                        <!--hora entrada-->
                        <h5>Hora Entrada</h5>
                        <input type="text" name="horallegada" id="horallegada" placeholder="Hora de Entrada" maxlength = "5">
                    </div>
                </div>
                <br>
                <!--Boton que verifica que se haya seleccionado los datos y que muestra registros-->
                <div>
                    <input type="submit" value="Registrar" name="enviar" class="btn btn-dark">            
                </div>
            </form>
               <?php
               require('funciones.php');
               //$clase = new Conexion;
                InsertarVuelo();
               ?>
        </section>
    </div>
</body>
<!--Mysql-->
<script src="js/modernizr.custom.lis.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function(){
        recargarCiudadesO();
        recargarCiudadesD();
        $('#paisesOrigen').change(function(){
            recargarCiudadesO();
        });
               
        $('#paisesDestino').change(function(){
            recargarCiudadesD();
        });

    });
</script>
<script>
    function recargarCiudadesO(){
        $.ajax({
            type: "POST",
            url: "select1.php",
            data:"ciudadOrigen=" + $('#paisesOrigen').val(),
            success: function(r){
                $('#listaCiudadesO').html(r);
            } 

        });
    }
    function recargarCiudadesD(){
        $.ajax({
            type: "POST",
            url: "select2.php",
            data:"ciudadDestino=" + $('#paisesDestino').val(),
            success: function(r){
                $('#listaCiudadesD').html(r);
            } 

        });
    }
</script>
<?php
    mysqli_close($conn);
?>
</html>
