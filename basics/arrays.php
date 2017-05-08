<?php

$fruits = [
	"apple", // 1
	"orange", // 2
	"banana", // 0
	"satsuma",
];

$number_of_fruits = count($fruits);

for ($i = 0; $i <= $number_of_fruits - 1; $i++) {
	echo $i . ": " . $fruits[$i] . "\n";
}

foreach ($fruits as $fruit) {
	echo $fruit . "\n";
}
