<?php

namespace OctaconDeveloper\LaravelNaijaFaker\Factory;

class PhoneNumber extends \OctaconDeveloper\LaravelNaijaFaker\Load
{

	protected static $providerType = array(
		'MTN','AIRTEL','GLO','ETISALAT','STARCOMMS', 'VISAFONE'
	);


	protected static $allPrefix = array(
		'0803', '0703', '0903', '0806', '0706', '0813', '0810', '0814', '0816','0805', '0705', '0905', '0807', '0815', '0811', '0905','0802', '0902', '0701', '0808', '0708', '0812','0809', '0909', '0817', '0818','0819', '07028', '07029','0704', '07025', '07026'
	);

	protected static $mtnPrefix = array(
		'0803', '0703', '0903', '0806', '0706', '0813', '0810', '0814', '0816'
	);

	protected static $gloPrefix = array(
		'0805', '0705', '0905', '0807', '0815', '0811', '0905'
	);

	protected static $airtelPrefix = array(
		'0802', '0902', '0701', '0808', '0708', '0812'
	);

	protected static $etisalatPrefix = array(
		'0809', '0909', '0817', '0818'
	);

	protected static $starcommsPrefix = array(
		 '0819', '07028', '07029'
	);

	protected static $visafonePrefix = array(
		 '0704', '07025', '07026'
	);

	protected static $areaCode = array(
		'Aba' =>	82,
		'Abakaliki' =>	43,
		'Abeokuta' =>	39,
		'Abuja' =>	'09',
		'Ado Ekiti' =>	30,
		'Agbor' =>	55,
		'Ahoada' =>	86,
		'Akure' =>	34,
		'Asaba' =>	56,
		'Auchi' =>	57,
		'Awka' =>	48,
		'Azare' =>	71,
		'Badagry' =>	'01',
		'Bauchi' =>	77,
		'Benin' =>	52,
		'Birnin' =>	68,
		'Calabar' =>	87,
		'Damaturu' =>	74,
		'Edo' =>	52,
		'Enugu' =>	42,
		'Gombe' =>	72,
		'Gusau' =>	63,
		'Hadejia' =>	78,
		'Ibadan' =>	'02',
		'Ijebu Ode' =>	37,
		'Ikare' =>	50,
		'Ile Ife' =>	36,
		'Ilorin' =>	31,
		'Jalingo' =>	79,
		'Jos' =>	73,
		'Kaduna' =>	62,
		'Kafanchau' =>	61,
		'Kano' =>	64,
		'Katsina' =>	65,
		'Kontagora' =>	67,
		'Lafia' =>	47,
		'Lagos' =>	'01',
		'Lokoja' =>	58,
		'Maiduguri' =>	76,
		'Makurdi' =>	44,
		'Minna' =>	66,
		'Niger' =>	66,
		'Ogoja' =>	45,
		'Okitipupa' =>	59,
		'Onitsha' =>	46,
		'Oshogbo' =>	35,
		'Owerri' =>	83,
		'Owo' =>	51,
		'Oyo' =>	38,
		'PankShin' =>	70,
		'Port Harcourt' =>	84,
		'Sapele' =>	54,
		'Sokobo' =>	60,
		'Umuahia' =>	88,
		'Uyo' =>	85,
		'Warri' =>	53,
		'Wukari' =>	41,
		'Yenegoa' => 89,
		'Yola' =>	75,
		'Zaria' =>	69,

	);

	public static function numberGenerator($count = 8)
	{
		$v = rand(40, 4000) * time();
		$response = sprintf("%0.{$count}s", str_shuffle($v));
		return $response;
	}

}
