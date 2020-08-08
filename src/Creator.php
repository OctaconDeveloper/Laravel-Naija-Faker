<?php

namespace OctaconDeveloper\LaravelNaijaFaker;

use OctaconDeveloper\LaravelNaijaFaker\Generator\PhoneNumber as phone;
use OctaconDeveloper\LaravelNaijaFaker\Generator\State as state;
use OctaconDeveloper\LaravelNaijaFaker\Generator\LocalGovernment as lga;
use OctaconDeveloper\LaravelNaijaFaker\Generator\Person as person;

class Creator {

    public static function phoneNumber($args = null)
    {
        return phone::randomPhoneNumber($args);
    }

    public static function landLine($args = null)
    {
        return phone::randomLandLine($args);
    }

    public static function state($args = null)
    {
        return state::randomState($args);
    }

    public static function stateFull($args = null)
    {
        return state::abbreviatedState($args);
    }

    public static function lgas($args = null){
        return lga::lgas($args);
    }

    public static function randomLga($args = null){
        return lga::randomLga($args);
    }

    public static function randomZoneLga($args = null){
       return  lga::randomLga(state::randomState($args));
    }

    public static function firstName($args = null){
        return  person::firstName($args);
     }

     public static function lastName($args = null){
        return  person::lastName($args);
     }

     public static function maleName($args = null){
        return  person::maleName($args);
     }

     public static function femaleName($args = null){
        return  person::femaleName($args);
     }

     public static function fullName($args = null){
        return  person::fullName($args);
     }

     public static function nameAbbr($args = null){
        return  person::nameAbbr($args);
     }


}
