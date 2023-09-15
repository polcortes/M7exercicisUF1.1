<?php

    $n = 10;

    $tds = "";

    for ($i = 0; $i < $n; $i++) {
        $tds .= "<td>".$i."</td>
        ";
    }

    echo"<table>
        <tr>".$tds."</tr>
    </table>";

?>

<style>
    table {
        border: 1px solid;
        border-collapse: collapse;
        padding: 5px;
    }
</style>