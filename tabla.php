<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                 <h1>Lista de precio</h1>
            </div>
        </div>
        <div class="row">
             <div class="col-12">
                 <table class="table table-hover border">
                     <thead>
                     <tr>
                         <th>Producto</th>
                         <th>Cantidad</th>
                         <th>Importe</th>
                     </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>Impresora HP1102W</td>
                            <td>20</td>
                            <td>$12.000</td>
                        </tr>
                        <tr>
                            <td>Pizarra digital</td>
                            <td>25</td>
                            <td>$45.000</td>
                        </tr>
                        <tr>
                            <td>Notebook HP 15'</td>
                            <td>15</td>
                            <td>$95.000</td>
                        </tr>
                        <tr>
                            <td colspan="2" >TOTAL:</td>
                            <td>$152.000</td>
                        </tr>
                     </tbody>
                 </table>
             </div>
        </div>
    </main>
</body>
</html>