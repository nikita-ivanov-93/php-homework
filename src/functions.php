<?php

function task1 ($array, $param = false) {
    if ($param == true) {
        foreach ($array as $string) {
            echo "<p>$string</p>";
        }
    } else {
        $string = implode(', ', $array);
        echo "<p>$string</p>";
    }
}


function task2 (...$args) {
    $sign = $args[0];
    $numbers = array_slice($args,1);
    $res = $numbers[0];
    switch ($sign) {
        case '+':
            $res = array_sum($numbers);
            break;
        case '-':
            $res = $res - array_sum(array_slice($numbers, 1));
            break;
        case '*':
            foreach ($numbers as $number) {
                $res *= $number;
            }
            break;
        case '/':
            foreach (array_slice($numbers, 1) as $number) {
                $res /= $number;
            }
            break;
        default:
            echo "First argument should be sign!!";
    }
    echo "$res<br>";
}

function task3 ($num1, $num2) {
    $cols = $num1;
    $rows = $num2;
    if (is_int($cols) && is_int($rows)) {
        if ($cols > 0 && $rows> 0) {
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
            echo 'Arguments should be positive!!';
        }
     }else {
        echo 'Arguments should be integer!';
    }


}

function task4() {
    date_default_timezone_set('Europe/Moscow');
    echo "<br>";
    echo date('d.m.Y H:i');
    echo "<br>";
    echo strtotime('24.02.2016 00:00:00');
    echo "<br>";
    //echo date('d.m.Y H:i:s',1456261200);
}

function task5() {
    $string1 = 'Карл у Клары украл Кораллы';
    echo str_replace('К','',$string1);
    echo "<br>";
    $string2 = 'Две бутылки лимонада';
    echo str_replace('Две','Три',$string2);
    echo "<br>";
}

function task6($filename) {
    $file = fopen($filename,'r');
    if ($file) {
        $string = '';
        while (!feof($file)) {
            $string .= fgets($file,1024);
        }
        echo $string;
    } else {
        echo 'file is not open!';
    }
}

