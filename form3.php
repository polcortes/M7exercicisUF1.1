<table>
<?php
    $n = 10;
    $m = 7;
    $aux = 0;

    
    for ($i = 0; $i < $n+1; $i++) {
        echo "<tr>";
        for ($j = $aux; $j < $m+$aux; $j++) {
            echo "<td>".$j."</td>";
        }
        $aux++;
        echo "</tr>";
    }
    
?>
</table>

<style>
    table {
        border: 1px solid;
        border-collapse: collapse;
    }

    td {
        border: 1px solid;
        padding: 5px;
    }

    tr {border:1px solid;}
</style>