<?php

$person = [
	"name" => "Johan",
	"age" => 34,
	"city" => "Lund",
];

foreach ($person as $key => $value) {
	echo $key . ": " . $value . "\n";
}

var_dump($person);
