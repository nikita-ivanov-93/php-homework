<?php

$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
);
$toyota = array(
    "model" => "Camry",
    "speed" => 140,
    "doors" => 5,
    "year" => "2016"
);
$opel = array(
    "model" => "Astra",
    "speed" => 100,
    "doors" => 3,
    "year" => "2014"
);
$cars = array(
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel,
);
echo 'CAR <br>';
echo "<table>";
echo
'<tr>
    <td>name</td>
    <td>model</td>
    <td>speed</td>
    <td>doors</td>
    <td>year</td>
</tr>';

foreach ($cars as $carName => $car)
{
    echo "<tr><td>";
    echo $carName;
    echo "</td>";
    foreach ($car as $characteristic)
    {
        echo "<td>$characteristic</td>";
    }
    echo "</tr>";
}


