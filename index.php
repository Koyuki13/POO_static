<?php

require_once 'Speedometer.php';

echo "10 km = " . number_format(Speedometer::convertKmToMiles(10), 3) . " miles <br>";
echo "10 miles = " . number_format(Speedometer::convertMilesToKm(10), 3) . " km <br>";