<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[] = array(
    "DNI" => "33.765.212",
	"nombre" => "Ana Acuña",
	"edad" => 45,
	"peso" => 81.50,
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
	"nombre" => "Gonzalo Bustamante",
	"edad" => 66,
	"peso" => 79.00,
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
	"nombre" => "Juan Irraola",
	"edad" => 28,
	"peso" => 50.00,
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
	"nombre" => "Beatriz Ocampo",
	"edad" => 50,
	"peso" => 79.90,
);

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
                 <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
             <div class="col-12">
                 <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php
                    foreach ($aPacientes as $pos => $aClientes){ 
                        echo "<tr>";
                        echo "<td>" . $aClientes["DNI"] . "</td>";
                        echo "<td>" . $aClientes["nombre"] . "</td>";
                        echo "<td>" . $aClientes["edad"] . "</td>";
                        echo "<td>" . $aClientes["peso"] . "</td>";
                        echo "</td>";
                    }
                    ?>
                </table>
            </div>
         </div>
    </div>    

</body>
</html>

