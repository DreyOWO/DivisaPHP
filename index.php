<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisa Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="Img/unnamed.webp" alt="conversor-icon">
    <h1>Divisa Converter</h1>
    <div class="container">
        <form method="POST" action="">
            <div class="moneda"> 
                <select name="moneda-uno">
                    <option value="CRC">CRC</option>
                    <option value="JPY">JPY</option>
                    <option value="COP">COP</option>
                    <option value="USD">USD</option>
                </select>
                <input type="number" name="cantidad-uno" placeholder="0" value="1">
            </div>
            <div class="taza-cambio-container">
                <button class="btn" type="submit" name="convertir">Convert</button>
                <div class="cambio">
                    <?php
                    $convertedAmount = '';  // Variable to store the converted amount
                    if (isset($_POST['convertir'])) {
                        $cantidadUno = $_POST['cantidad-uno'];
                        $monedaUno = $_POST['moneda-uno'];
                        $monedaDos = $_POST['moneda-dos'];
                        
                        // Tipos de cambio (ejemplo)
                        $exchangeRates = array(
                            "CRC" => array("CRC" => 1, "JPY" => 0.18, "COP" => 7.6, "USD" => 0.0017),
                            "JPY" => array("CRC" => 5.55, "JPY" => 1, "COP" => 42.11, "USD" => 0.0092),
                            "COP" => array("CRC" => 0.13, "JPY" => 0.024, "COP" => 1, "USD" => 0.00022),
                            "USD" => array("CRC" => 583.1, "JPY" => 109.75, "COP" => 3660.5, "USD" => 1),
                        );
                        
                        // Verificar si las divisas son válidas
                        if (isset($exchangeRates[$monedaUno][$monedaDos])) {
                            $rate = $exchangeRates[$monedaUno][$monedaDos];
                            $convertedAmount = $cantidadUno * $rate;
                            echo "$cantidadUno $monedaUno es igual a $convertedAmount $monedaDos.";
                        } else {
                            echo "Conversión no válida.";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="moneda"> 
                <select name="moneda-dos">
                    <option value="CRC">CRC</option>
                    <option value="JPY">JPY</option>
                    <option value="COP">COP</option>
                    <option value="USD">USD</option>
                </select>
                <input type="number" name="cantidad-dos" placeholder="0" readonly value="<?php echo $convertedAmount; ?>">
            </div>
        </form>
    </div>
</body>
</html>
