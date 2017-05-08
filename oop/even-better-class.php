<?php

class Residence {
	protected $street;
	protected $street_number;
	protected $city;
	protected $rooms;
	protected $squaremeters;

	function __construct($street, $street_number, $city, $rooms, $squaremeters) {
		$this->street = $street;
		$this->street_number = $street_number;
		$this->city = $city;
		$this->rooms = $rooms;
		$this->squaremeters = $squaremeters;
	}

	public function getAddress() {
		return "{$this->street} {$this->street_number}, {$this->city}";
	}

	public function setStreet($street) {
		$this->street = $street;
	}

	public function getRoomAvgSqm() {
		return $this->squaremeters / $this->rooms;
	}
}

// $residences = [
// 	new Residence("Neversvägen", 33, "Lund", 3, 85),
// 	new Residence("Lyftvägen", 26, "Dalby", 2, 76),
// ];

$residences = [];
$residences[] = new Residence("Neversvägen", 33, "Lund", 3, 85);
$residences[] = new Residence("Lyftvägen", 26, "Dalby", 2, 76);

$residences = [];
$residences["neversvagen"] = new Residence("Neversvägen", 33, "Lund", 3, 85);
$residences["lyftvagen"] = new Residence("Lyftvägen", 26, "Dalby", 2, 76);

foreach ($residences as $residence) {
	echo $residence->getAddress() . "\n";
}
