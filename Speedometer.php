<?php

class Speedometer
{
    const CONVERT = 0.621;

    public static function convertKmToMiles(float $km): float
    {
        return $km * self::CONVERT;
    }

    public static function convertMilesToKm(float $miles): float
    {
        return $miles / self::CONVERT;
    }
}
