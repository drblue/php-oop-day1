<?php

class Residence {
	public $street;
	public $street_number;
	public $city;
	public $rooms;
	public $squaremeters;

	public function getAddress() {
		return "{$this->street} {$this->street_number}, {$this->city}";
	}

	public function getRoomAvgSqm() {
		return $this->squaremeters / $this->rooms;
	}
}

$neversvagen = new Residence();
$neversvagen->street = "Neversvägen";
$neversvagen->street_number = 33;
$neversvagen->city = "Lund";
$neversvagen->rooms = 3;
$neversvagen->squaremeters = 85;

$lyftvagen = new Residence();
$lyftvagen->street = "Lyftvägen";
$lyftvagen->street_number = 26;
$lyftvagen->city = "Dalby";
$lyftvagen->rooms = 2;
$lyftvagen->squaremeters = 76;

var_dump($neversvagen->getRoomAvgSqm());
var_dump($lyftvagen->getRoomAvgSqm());
