<?php

$valor = '';
$desde = '';
$hasta = '';
$resultado = '';

//Convertidor
function convertir_metros($valor, $unidad)
{

    switch ($unidad) {
        case 'Opc1':
            //echo "Has seleccionado Milimetros.";
            return $valor / 1000;
            break;
        case 'Opc2':
            //echo "Has seleccionado Centimetros.";
            return $valor / 100;
            break;
        case 'Opc3':
            //echo "Has seleccionado Decimetros.";
            return $valor / 10;
            break;
        case 'Opc4':
            //echo "Has seleccionado Metro.";
            return $valor;
            break;
        case 'Opc5':
            //echo "Has seleccionado Decametros.";
            return $valor * 10;
            break;
        case 'Opc6':
            //echo "Has seleccionado Hectometros.";
            return $valor * 100;
            break;
        case 'Opc7':
            //echo "Has seleccionado Kilometros.";
            return $valor * 1000;
            break;
        default:
            //echo "Opción no válida.";
            break;
    }
}


function convertir_desde_metros($valor, $unidad)
{

    switch ($unidad) {
        case 'Opc1':
            //echo "Has seleccionado Milimetros.";
            return $valor * 1000;
            break;
        case 'Opc2':
            //echo "Has seleccionado Centimetros.";
            return $valor * 100;
            break;
        case 'Opc3':
            //echo "Has seleccionado Decimetros.";
            return $valor * 10;
            break;
        case 'Opc4':
            //echo "Has seleccionado Metro.";
            return $valor;
            break;
        case 'Opc5':
            //echo "Has seleccionado Decametros.";
            return $valor / 10;
            break;
        case 'Opc6':
            //echo "Has seleccionado Hectometros.";
            return $valor / 100;
            break;
        case 'Opc7':
            //echo "Has seleccionado Kilometros.";
            return $valor / 1000;
            break;
        default:
            //echo "Opción no válida.";
            break;
    }
}


//boton que se verifica
if (isset($_POST['btn_convertir'])) {

    //obteniendo los valores de los name
    $valor = floatval($_POST['valor']); // Convierte a número flotante
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

    $resultadoMetros = convertir_metros($valor, $desde);
    $resultado = convertir_desde_metros($resultadoMetros, $hasta);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Inputs y Selects - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Formulario</h2>
        <form method="POST">
            <!-- Input para meter un valor -->
            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Introduce un valor" value="<?php echo $valor; ?>">
            </div>

            <!-- Select de unidad de origen -->
            <div class="mb-3">
                <label for="desde" class="form-label">Desde:</label>
                <select class="form-select" name="desde">
                    <option value="">--Seleccione una opción--</option>
                    <option value="Opc1" <?php if ($desde == 'Opc1') echo 'selected'; ?>>Milímetro</option>
                    <option value="Opc2" <?php if ($desde == 'Opc2') echo 'selected'; ?>>Centímetro</option>
                    <option value="Opc3" <?php if ($desde == 'Opc3') echo 'selected'; ?>>Decímetro</option>
                    <option value="Opc4" <?php if ($desde == 'Opc4') echo 'selected'; ?>>Metro</option>
                    <option value="Opc5" <?php if ($desde == 'Opc5') echo 'selected'; ?>>Decámetro</option>
                    <option value="Opc6" <?php if ($desde == 'Opc6') echo 'selected'; ?>>Hectómetro</option>
                    <option value="Opc7" <?php if ($desde == 'Opc7') echo 'selected'; ?>>Kilómetro</option>
                </select>
            </div>

            <!-- Select de unidad de destino -->
            <div class="mb-3">
                <label for="hasta" class="form-label">Hasta:</label>
                <select class="form-select" name="hasta">
                    <option value="">--Seleccione una opción--</option>
                    <option value="Opc1" <?php if ($hasta == 'Opc1') echo 'selected'; ?>>Milímetro</option>
                    <option value="Opc2" <?php if ($hasta == 'Opc2') echo 'selected'; ?>>Centímetro</option>
                    <option value="Opc3" <?php if ($hasta == 'Opc3') echo 'selected'; ?>>Decímetro</option>
                    <option value="Opc4" <?php if ($hasta == 'Opc4') echo 'selected'; ?>>Metro</option>
                    <option value="Opc5" <?php if ($hasta == 'Opc5') echo 'selected'; ?>>Decámetro</option>
                    <option value="Opc6" <?php if ($hasta == 'Opc6') echo 'selected'; ?>>Hectómetro</option>
                    <option value="Opc7" <?php if ($hasta == 'Opc7') echo 'selected'; ?>>Kilómetro</option>
                </select>
            </div>

            <!-- Botón para calcular -->
            <button type="submit" name="btn_convertir" class="btn btn-primary">Calcular</button>

            <!-- Mostrar el resultado -->
            <div class="mt-3">
                <label for="resultado" class="form-label">Resultado:</label>
                <input type="text" class="form-control" name="resultado" value="<?php echo isset($resultado) ? $resultado : ''; ?>" readonly>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>