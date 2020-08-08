<?php
namespace OctaconDeveloper\LaravelNaijaFaker\Generator;

class PhoneNumber extends \OctaconDeveloper\LaravelNaijaFaker\Factory\PhoneNumber
{

    private $networkCode;
    private $regionCode;
    private $format;

	protected static $extraFormat = array(
        '+234-{{networkCode}}-###-####',
        '+234{{networkCode}}#######'
    );

    protected static $normalFormat = array(
        '{{networkCode}}-###-#####',
        '({{networkCode}}) ### #####',
    );


    protected static $fullFormat = array(
        '234-{{networkCode}}-#######',
        '234-({{networkCode}}) #######',
    );

    protected static $phoneFormats = array(
        '234-{{networkCode}}-#######',
        '234-({{networkCode}}) #######',
        '{{networkCode}}-###-#####',
        '({{networkCode}}) ### #####',
        '+234-{{networkCode}}-###-####',
        '+234{{networkCode}}#######'
    );

	protected static $landLineFormat = array(
        '+234-{{areaCode}}-###-####',
        '({{areaCode}})-###-####',
    );

	protected static $landLineNoFormat = array(
        '+234{{areaCode}}#######',
        '({{areaCode}})#######',
    );

    protected static $restrictedPhoneFormat = array(
        'landLineNoFormat',
        'landLineFormat',
    );

    protected static $restrictedLineFormat = array(
        'extraFormat',
        'normalFormat',
        'fullFormat',
        'phoneFormats',
    );

    protected static $allowedLineFormat = array(
        'landLineNoFormat',
        'landLineFormat',
    );

    protected static $allowedPhoneFormat = array(
        'extraFormat',
        'normalFormat',
        'phoneFormats',
        'fullFormat'
    );

    // Example 070582546662
    public  static function randomPhoneNumber($format = null)
    {
        if(!in_array($format, static::$restrictedPhoneFormat) && in_array($format, static::$allowedPhoneFormat) && $format != null){
            $formatting =  self::getRandom(static::${$format});
            $providerFull = 'allPrefix';
        }else
        if(!in_array(strtolower($format).'Prefix', static::$providerType) && $format != null){
            $formatting = '{{networkCode}}########';
            $providerFull = strtolower($format).'Prefix';
        }else{
            $formatting = '{{networkCode}}########';
            $providerFull = 'allPrefix';
        }
    	//1. get NetworkCode
       	$providers = self::getRandom(static::${$providerFull});
        //2. get random 7 or 8 digit
        $firstNumber = substr(trim($formatting), 0, 1);
        $number =  static::numberGenerator(8);
        $numberToFormat = ($firstNumber !== "+" && $firstNumber !== "2") ? $providers : substr($providers, 1) ;
    	// 3. pass to formatter
        return self::numberFormater($number, $formatting, [$numberToFormat] );
    }

    // Example (01)8115181
    public  static function randomLandLine($format = null)
    {
        if(!in_array($format, static::$restrictedLineFormat) && in_array($format, static::$allowedLineFormat) && $format != null){
            $formatting =  self::getRandom(static::${$format});
            $areaCode = self::getRandom(static::$areaCode);
        }else
        if(!in_array($format, static::$areaCode) && $format != null){
            $formatting = '({{areaCode}}) #######';
            $areaCode = self::getSingle(static::$areaCode, $format);
        }
        else{
            $formatting = '({{areaCode}}) #######';
            $areaCode = self::getRandom(static::$areaCode);
        }
        $number =  static::numberGenerator(7);
        return self::numberFormater($number, $formatting, [$areaCode] );
    }

}
