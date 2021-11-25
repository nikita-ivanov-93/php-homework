<?php

function task1 ($array, $param) {
    if ($param === true) {
        foreach ($array as $string) {
            echo "<p>$string</p>";
        }
    } else {
        $string = implode($array, ', ');
        echo "<p>$string</p>";
    }
}

function task2 (...$args) {
    $sign = $args[0];
    $numbers = array_slice($args,1);
    $res = 0;
    switch ($sign) {
        case '+':
            $res = array_sum($numbers);
            break;
        case '-':
            $res = $res - array_sum(array_slice($numbers, 1));
            break;
        case '*':
            $res = 1;
            foreach ($numbers as $number) {
                $res *= $number;
            }
            break;
        case '/':
            $res = $numbers[0];
            foreach (array_slice($numbers, 1) as $number) {
                $res /= $number;
            }
            break;
    }
    echo $res;
}

function task3 ($num1, $num2) {
    $cols = $num1;
    $rows = $num2;
    if (is_int($cols) && is_int($rows)) {
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
    } else {
        echo 'Arguments should be integer!';
    }


}

