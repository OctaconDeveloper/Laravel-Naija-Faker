<?php
namespace OctaconDeveloper\LaravelNaijaFaker\Generator;

class LocalGovernment extends \OctaconDeveloper\LaravelNaijaFaker\Factory\LocalGovernment
{

    public static function lgas($state = null)
    {
        if(in_array($state, static::$States) && $state != null){
            $selectedState = self::transform($state).'State';
        }else{
            $selectedState = self::transform(self::getRandom(static::$States)).'State';
        }
        return json_encode(static::${$selectedState});
    }

    public  static function randomLga($state = null)
    {
        if(in_array($state, static::$States) && $state != null){
            $selectedState = self::transform($state).'State';
        }else{
            $selectedState = self::transform(self::getRandom(static::$States)).'State';
        }
        return self::getRandom(static::${$selectedState});
    }
}
