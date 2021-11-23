<?php

$cols = 10;
$rows = 10;

echo "<table border='1'>";

for ($tr = 1; $tr <= $rows; $tr++)
{
    echo "<tr>";
    for ($td = 1; $td <= $cols; $td++){
        $res = $tr*$td;
        if (($tr % 2) == 0 && ($td % 2) == 0) {
            echo "<td>($res)</td>";
        } elseif (($tr % 2) == 1 && ($td % 2) == 1) {
            echo "<td>[$res]</td>";
        } else {
            echo "<td>$res</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";