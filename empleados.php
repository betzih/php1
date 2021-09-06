<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "DNI" => "33.300.123",
	"nombre" => "David Garcia",
	"bruto" => 85000.30,
);
$aEmpleados[] = array(
    "DNI" => "40.874.456",
	"nombre" => "Ana Del Valle",
	"bruto" => 9000,
);
$aEmpleados[] = array(
    "DNI" => "67.567.565",
	"nombre" => "Andres Perez",
	"bruto" => 100000,
);
$aEmpleados[] = array(
    "DNI" => "75.744.545",
	"nombre" => "Victoria Luz",
	"bruto" => 70000,
);
function calcularNeto($bruto){
    return $bruto - ($bruto * 0.17);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                 <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
             <div class="col-12">
                 <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Sueldo</th>
                    </tr>
                    <?php
                    foreach ($aEmpleados as $aClientes) { 
                        echo "<tr>";
                        echo "<td>" . $aClientes["DNI"] . "</td>";
                        echo "<td>" . mb_strtoupper($aClientes["nombre"]) . "</td>";
                        echo "<td>" . number_format(calcularNeto($aClientes["bruto"]), 2, ",", ".") . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class= "col-12 ps-5">
                 <p>Cantidad de empleados activos:
                    <?php
                    echo count($aEmpleados);
                    ?>
                </p>
            </div>
        </div>
</body>
</html>