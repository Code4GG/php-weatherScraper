<?php

	$city = $_GET['city'];

	$city = str_replace(" ", "", $city);

         $contents = file_get_contents("https://api.openweathermap.org/data/2.5/forecast?										city=".$city."&APPID=187fb301a3565644c00135af35769e08");

         preg_match($contents, $matches);

         echo $matches;

?>