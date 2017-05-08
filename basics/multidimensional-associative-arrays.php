<?php

$coords = [
	"burger king" => ["y" => -5, "x" => 25, ], // 1
	"mcdonalds" => ["x" => 10, "y" => -15], // 0
	"max" => ["x" => -5, "y" => 30], // 2
];

// foreach ($coords as $coord_index => $coord) { // [10, -15]
// 	echo "Coordinate {$coord_index}:\n";
// 	echo "X: {$coord['x']}, Y: {$coord['y']}\n";
// }

$coords_burgerking = $coords["burger king"];
var_dump($coords_burgerking);
