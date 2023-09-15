<table>
    <?php
        $n = 10;
        $m = 10;

        for ($i = 0; $i < $n + 1; $i++) {
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
                    echo ($j == 0
                        ? "<td>".chr(($i-1)+65)."</td>"
                        : "<td></td>");
                }
            }
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
        min-width: 25px;
        text-align: center;
        vertical-align:middle;
    }
</style>