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

                /*$options = ["f", "s", "d", "p"];

                $f = ["vaixells" => [
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false]],
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false]],
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false]],
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false]]
                ]];

                $s = ["vaixells" => [
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false]],
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false]],
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false]]
                ]];

                $d = ["vaixells" => [
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false]], 
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false]]
                ]];

                $p = ["vaixells" => [
                    [["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false], ["x" => rand(1,10), "y" => rand(1,10), "placed" => false]]
                ]];

                foreach ($f["vaixells"] as $key => $value) {
                    // echo ($key == "x" || $key == "y" ? "x = ".$value : "");
                    /*if ($key == "x" || $key == "y") {
                        echo $key." = ".$value;
                    }
                    

                    foreach ($value as $posicion) {
                        echo "x = ".$posicion["x"]." and y = ".$posicion["y"]."<br>";
                    }
                }*/

                $vaixells = [4,3,3,2,2,2,1,1,1,1];

                $posicionsDefinitives = Array();

                $posicions;

                foreach ($vaixells as $vaixell) {
                    $posicions .= Array(Array(rand(1,10), rand(1,10)));
                }

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
                            }
                            
                            else {
                                echo "<td></td>";
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