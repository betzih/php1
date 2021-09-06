<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){   /* es postback ? */

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    //Si usuario es distinto de vacio y clave es distinto de vacio, entonces:
    if($usuario !="" && $clave != "") {
        header("location: acceso-confirmado.php");
    } else{
        $msg = "Valido para usuarios registrados";
    }
            

}
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">   
</head>
<body>
    <main class= "container">
        <div class= "row">
            <div class= "col-6 mt-5">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class= "col-6">
                <?php if (isset($msg) && $msg != ""): ?>
                    <div class="alert alert-danger" role="alert"><?php echo $msg; ?></div> 
                <?php endif; ?>   
                <form method="POST" action="">
                    <div class="py-2">
                        <label for="txtUsuario">Usuario:</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>
                    <div class="py-2">
                        <label for="txtClave">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="py-2">
                        <button type= "submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>   
    </main>
</body>
</html>