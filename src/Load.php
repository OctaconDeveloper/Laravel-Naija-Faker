<?php

	namespace OctaconDeveloper\LaravelNaijaFaker;

	class Load {

		private static $replace = array();

		private static $defaultNumber = '1234567890';

		protected static function getSingle(array $array, $key)
		{
			return $array[$key];
		}

		protected static function getRandom(array $array)
		{
			return $array[array_rand($array)];
		}

		protected static function getRandomWithKey(array $array)
		{
			$key = array_rand($array);
			return $array[$key].' ('.$key.')';
		}

		protected static function numberFormater(
			$number = '',
			$format = '############',
			$affix = array()
		)
		{
			$newFormat = '';

			$count = substr_count($format, "#");

			for ($i = 0; $i < $count; $i++){
				$newFormat  .= str_split($number)[$i];
			}
			return trim(strtok(self::stringReplace($format, $affix), '#').$newFormat);
		}

		protected static function stringReplace(string $string, array $replace = [] )
		{
			self::$replace = $replace;
			return preg_replace_callback(
            "/{{.*}}/",
            "static::replaceMethod",
            $string);
		}

		private static function replaceMethod ($matches)
		{
			$toReplace = explode('-', $matches[0]); //splits the result into array
			$glue = implode('-',array_replace($toReplace,self::$replace)); //joins to array back
			return $glue; //return a glue with new replacements
		}

		protected static function transform(string $string)
		{
			$data = explode(" ", $string);
			return
			sizeof($data) > 1 ?
			strtolower($data[0]).ucfirst(strtolower($data[1]))
			:
			strtolower($data[0]);
		}

		protected static function refactor(string $string)
		{
			return
			strtolower($string);
		}

		protected static function trimpos(string $string)
		{
			return strtoupper(mb_substr($string, 0, 1, 'utf-8')).'. '.strtoupper(mb_substr($string, 1, 1, 'utf-8')).'.';
		}


	}
