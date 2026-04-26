<?php

$equation = "10 + X = 33";

echo "$equation<br>";
echo "<br>";

$parts = explode(" ", $equation);

$left1 = $parts[0];
$operator = $parts[1];
$left2 = $parts[2];
$right = $parts[4];

echo "Оператор: $operator<br>";

if ($left1 === "X") {
    $known = $left2;
    $xPosition = "первый операнд";
} else {
    $known = $left1;
    $xPosition = "второй операнд";
}

echo "X $xPosition<br>";
echo "<br>";

$x = 0;

if ($operator === "+") {
    $x = $right - $known;

} elseif ($operator === "-") {
    if ($left1 === "X") {
        $x = $right + $known;
    } else {
        $x = $known - $right;
    }

} elseif ($operator === "*") {
    $x = $right / $known;

} elseif ($operator === "/") {
    if ($left1 === "X") {
        $x = $right * $known;
    } else {
        $x = $known / $right;
    }
}

$xStr = ($x == (int)$x) ? (int)$x : sprintf("%.2f", $x);

echo "X = $xStr<br>";

