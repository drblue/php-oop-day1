<?php

class Residence {
	public $street;
	public $street_number;
	public $city;
	public $rooms;
	public $squaremeters;

	function __construct($street, $street_number, $city, $rooms, $squaremeters) {
		$this->street = $street;
		$this->street_number = $street_number;
		$this->city = $city;
		$this->rooms = $rooms;
		$this->squaremeters = $squaremeters;
	}

	public function getAddress() {
		return sprintf("Address: %s %d, %s", $this->street, $this->street_number, $this->city);
		// return "{$this->street} {$this->street_number}, {$this->city}";
		// return $this->street . " " . $this->street_number . ", " . $this->city;
	}

	public function getRoomAvgSqm() {
		return $this->squaremeters / $this->rooms;
	}
}

$neversvagen = new Residence("Neversvägen", 33, "Lund", 3, 85);
$lyftvagen = new Residence("Lyftvägen", 26, "Dalby", 2, 76);

// echo $neversvagen->getAddress() . "\n";
// echo $lyftvagen->getAddress() . "\n";

$residences = [
	$neversvagen,
	$lyftvagen,
];

foreach ($residences as $residence) {
	echo $residence->getAddress() . "\n";
}
