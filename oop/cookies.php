<?php

if (isset($_REQUEST['survey'])) {
	setcookie('hasAnsweredSurvey', 1, time()+60*60*24*365);	// tid just nu + 365 dagar
	header("Location: /day1/oop/cookies.php"); // dirigera om användaren tillbaka till sidan
}

// finns kakan 'hasAnsweredSurvey'? om inte, default:a till 0
$has_answered_survey = isset($_COOKIE['hasAnsweredSurvey']) ? $_COOKIE['hasAnsweredSurvey'] : 0;

// samma kod som raden ovan men mer uttömligt skriven
if (isset($_COOKIE['hasAnsweredSurvey'])) {
	$has_answered_survey = $_COOKIE['hasAnsweredSurvey'];
} else {
	$has_answered_survey = 0;
}

?>

Has user answered survey?
<?php
	// om $has_answered_survey är 1, skriv ut 'Yep' annars 'Nope'
	if ($has_answered_survey == 1) {
		echo "Yep!";
	} else {
		echo "Nope!";
	}
?>

<a href="/day1/oop/cookies.php?survey=1">Answer survey</a>
