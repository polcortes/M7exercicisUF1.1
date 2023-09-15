<table>
<?php
$n = 10;
$alpha = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

echo "\t<tr>\n";

for ($i = 0; $i < $n; $i++) {
    /*echo "\t\t<td>$alpha[$i]</td>";*/
    echo "\t\t<td>".chr($i+65)."</td>"; /**/
}

echo "\t</tr>\n\n\t<tr>\n";

for ($i = 1; $i < $n+1; $i++) {
    echo "\t\t<td>$i</td>\n";
}

echo "\t</tr>";
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
</style>