<?php

$day = rand(1, 10);

switch ($day) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 1:
        echo "Это рабочий день";
        break;
    case 7:
    case 6:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

