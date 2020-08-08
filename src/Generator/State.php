<?php
namespace OctaconDeveloper\LaravelNaijaFaker\Generator;

class State extends \OctaconDeveloper\LaravelNaijaFaker\Factory\State
{

    public  static function randomState($zone = null)
    {
        if(in_array($zone, static::$Zones) && $zone != null){
            $selectedZone = $zone.'Zone';
        }else{
            $selectedZone = 'AllZones';
        }
        return self::getRandom(static::${$selectedZone});
    }

    public  static function abbreviatedState($zone = null)
    {
        if(in_array($zone, static::$Zones) && $zone != null){
            $selectedZone = $zone.'Zone';
        }else{
            $selectedZone = 'AllZones';
        }
        return self::getRandomWithKey(static::${$selectedZone});
    }


}
