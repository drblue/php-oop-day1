<?php

$person = [
	"name" => "Johan",
	"age" => 34,
	"city" => "Lund",
];

$person2 = [
	"name" => "Anders",
	"city" => "Malmö",
];

// $days_old = $person["age"] * 365;
// var_dump($days_old);

class Person {
	public $name;
	public $age;
	public $city;

	public function getAgeInDays() {
		return $this->age * 365;
	}
}

$johan = new Person();
$johan->name = "Johan";
$johan->age = 34;
$johan->city = "Lund";

$anders = new Person();
$anders->name = "Anders";
$anders->age = 20;
$anders->city = "Malmö";

// var_dump($johan);
// var_dump($anders);

echo "Person 1 age in days: " . $johan->getAgeInDays() . "\n";
echo "Person 2 age in days: " . $anders->getAgeInDays() . "\n";

function getPersonsAgeInDays($age) {
	return $age * 365;
}
