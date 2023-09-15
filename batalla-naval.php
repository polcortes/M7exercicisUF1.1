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
                
                /*$vaixells = [
                    "f" => ["posisicions" => 1, "disponibles" => 4, "fitxa" => "F"],
                    "s" => ["posisicions" => 2, "disponibles" => 3, "fitxa" => "S"],
                    "d" => ["posisicions" => 3, "disponibles" => 2, "fitxa" => "D"],
                    "p" => ["posisicions" => 4, "disponibles" => 1, "fitxa" => "P"]
                ];*/

                $options = ["f", "s", "d", "p"];

                $tirar = [true, false];

                $f = ["vaixells" => [
                    ["x" => 3, "y" => 3], ["x" => 5, "y" => 5], ["x" => 7, "y" => 7], ["x" => 9, "y" => 9]
                ]];

                for ($i = 0; $i < $n + 1; $i++) {   // i = index_fila || j = index_columna
                    echo "<tr>";
                    if ($i == 0) {
                        for ($j = 0; $j < $m + 1; $j++) {
                            echo ($j == 0
                            ? "<td> </td>"
                            : "<td>".$j."</td>");
                        }
                    }
                    
                    else {
                        for ($j = 0; $j < $m + 1; $j++) {
                            if ($j == 0) { 
                                echo "<td>".chr(($i-1)+65)."</td>"; 
                            }
                            
                            else {
                                /*if ($vaixells["f"]["disponibles"] > 0 && $tirar.array_rand($tirar)) {
                                    $vaixells["f"]["disponibles"] = $vaixells["f"]["disponibles"] - 1;
                                    echo "<td>".$vaixells["f"]["fitxa"]."</td>";
                                }*/
                                
                                //else {
                                    echo "<td></td>";
                                //}

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
    }
    .vaixells h3 {
        text-align: center;
    }
</style>