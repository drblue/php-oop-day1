<?php

$coords = [
	[10, -15], // 0
	[25, -5], // 1
	[-5, 30], // 2
];

foreach ($coords as $coord_index => $coord) { // [10, -15]
	echo "Coordinate {$coord_index}:\n";
	foreach ($coord as $axis_index => $axis_value) { // 10
		echo "Axis {$axis_index}: ${axis_value}\n";
	}
}
