<?php
include '../src/functions.php';

echo task1(['1','2','3'],false);
echo task1(['1','2','3'], true);
echo "<br>";

echo task2('+',1,2,3,4);

echo task2('-',1,2,3,4);
echo task2('*',1,2,3,4);
echo task2('w',1,2,3,4);

echo task3(2,7);

task4();
task5();


$text = 'Hello again!';

$file = fopen('test.txt', 'w');

fwrite($file, $text);

fclose($file);

task6('test.txt');
