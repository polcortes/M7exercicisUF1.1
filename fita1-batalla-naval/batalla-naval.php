<main>
    <div>
        <h1>BATALLA NAVAL</h1>
        <hr>
    </div>
    <div>
        <table>
            <?php
                $n = 10;    // n = filas
                $m = 10;    // m = columnas

                $barcos = [4,3,3,2,2,2,1,1,1,1];

                $tablero = array_fill(0, $n, array_fill(0, $m, ""));    // Tablero = [[10 columnas] [10 columnas] [10 columnas] [10 columnas] [10 columnas] [10 columnas] [10 columnas] [10 columnas] [10 columnas] [10 columnas]]

                shuffle($barcos);   // Desordenar barcos para que no salgan en orden.

                foreach ($barcos as $barco) {
                    $colocado = false;
                    while (!$colocado) {
                        $fila = rand(0, count($tablero) - 1);
                        $columna = rand(0, count($tablero[0]) - 1);
                        $direccion = rand(0, 1);    // 0 = horizontal || 1 = vertical

                        if ($direccion == 0) {
                            // Cabe el barco en horizontal??
                            if ($columna + $barco <= count($tablero[0])) {
                                $colocado = true;
                                for ($i = 0; $i < $barco; $i++) {
                                    $tablero[$fila][$columna + $i] = $barco;
                                }
                            }
                        } else {
                            // Cabe el barco en vertical???
                            if ($fila + $barco <= count($tablero)) {
                                $colocado = true;
                                for ($i = 0; $i < $barco; $i++) {
                                    $tablero[$fila + $i][$columna] = $barco;
                                }
                            }
                        }
                    }
                }

                $n = count($tablero);
                $m = count($tablero[0]);
                
                // echo print_r($tablero);

                for ($i = 0; $i < $n + 1; $i++) {   // i = index_fila || j = index_columna
                    echo "<tr>";
                    if ($i == 0) {
                        for ($j = 0; $j < $m + 1; $j++) {
                            echo ($j == 0
                            ? "<td> — </td>"
                            : "<td>".$j."</td>");
                        }
                    }
                    
                    else {
                        for ($j = 0; $j < $m + 1; $j++) {
                            if ($j == 0) { 
                                echo "<td>".chr(($i-1)+65)."</td>"; 
                            } else {
                                $contenido = $tablero[$i-1][$j-1];
                                echo "<td>" . ($contenido == "" ? " " : $contenido) . "</td>";
                            }
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    <div class="vaixells">
        <h3>Vaixells:</h3>
        <ul>
            <li>Fragata: F (1 posició, 4 disponibles)</li>
            <li>Submarí: S (2 posicions, 3 disponibles)</li>
            <li>Destructor: D (3 posicions, 2 disponibles)</li>
            <li>Portaavions: P (4 posicions, 1 disponible)</li>
        </ul>
    </div>
</main>

<style>
    html {
        background-color: #D6B4FC;
    }

    table {
        border: 1px solid;
        border-collapse: collapse;
        background-color: violet;
    }

    /*tr:first-child td:first-child {
        background-color: #D6B4FC;
        border: 0px solid;
    }*/

    td {
        border: 1px solid;
        padding: 5px;
        min-width: 25px;
        min-height: 25px;
        text-align: center;
        vertical-align: middle;
    }

    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    div h1 {
        padding: 10px;
        background-color: violet;
        border-radius: 5px;
    }

    hr {
        height: 5px;
        background-color: #9400d3;
        margin-bottom: 19px;
        border-color: #9400d3;
    }
    .vaixells h3 {
        text-align: center;
    }
</style>