<?php
namespace ast\Registry;

/**
 * Class Registry
 * @package ast\Registry
 */
class Registry
{
	/**
	 * @var array
	 */
	private static $_map;
	static $keys;

	/**
	 * @param $key
	 * @return mixed
	 */
	public static function get($key)
	{
		if (array_key_exists($key, self::$_map)) {
			return self::$_map[$key];
		} else {
			return null;
		}
	}
 
	public static function showKeys($trace = false){
		if($trace == true){
			return self::$keys;
		}else{
			return array_keys(self::$keys);
		}

	}
 
	/**
	 * @param array|string $key
	 * @param mixed $value
	 */
	public static function set($key, $value = null)
	{
		if (is_array($key)) {
			foreach ($key as $k => $v) {
				self::setter($k, $v);
			}
		} else {
			self::setter($key, $value);
		}
	}

	/**
	 * @param $key
	 * @param $value
	 * @throws \Exception if key or value is not defined or setting existing property
	 */
	private function setter($key, $value)
	{

		self::$keys[$key] = debug_backtrace();

		if (!$key || !isset($value)) {

			static::throwException('Key or value is not defined');
		}

		if (!isset(self::$_map[$key])) {
			self::$_map[$key] = $value;
		} else {
            static::throwException('Trying to set existing property');
		}
	}

	/**
	 * @param $text
	 * @throws \Exception
	 */
	protected static function throwException($text)
	{
		throw new \Exception($text);
	}
}