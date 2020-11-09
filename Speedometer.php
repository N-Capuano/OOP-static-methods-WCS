<?php

Class Speedometer
{

    const factor = 1.609;

    public static function convertKmToMiles(int $kilometer)
    {

        $miles = $kilometer / self::factor;
        return $miles;

    }

    public static function convertMilesToKm(int $miles)
    {

        $kilometer = $miles * self::factor;
        return $kilometer;

    }

}

