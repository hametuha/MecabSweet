<?php

namespace MeCabSweet\Pattern;


use MeCabSweet\Data\Option;
use MeCabSweet\Data\SearchIndex;
use MeCabSweet\Utility\i18n;
use MeCabSweet\Utility\Input;
use MeCabSweet\Utility\String;

/**
 * Application Base
 *
 * @package MecabSweet\Pattern
 *
 * @property-read Input $input
 * @property-read i18n $i18n
 * @property-read String $str
 * @property-read SearchIndex $index_table
 * @property-read Option $option
 * @property-read string $version
 * @property-read string $base_dir
 * @property-read string $base_url
 * @property-read bool $library_exists
 */
abstract class Application extends Singleton
{

	/**
	 * Getter
	 *
	 * @param string $key
	 *
	 * @return mixed|null|string
	 */
	public function __get($key){
		switch($key){
			case 'input':
				return Input::get_instance();
				break;
			case 'i18n':
				return i18n::get_instance(array('domain' => MECAB_SWEET_DOMAIN));
				break;
			case 'str':
				return String::get_instance();
				breka;
			case 'version':
				return MECAB_SWEET_VERSION;
				break;
			case 'base_dir':
				return dirname(dirname(__DIR__));
				break;
			case 'base_url':
				return plugin_dir_url(dirname(__DIR__));
				break;
			case 'option':
				return Option::get_instance();
				break;
			case 'library_exists':
				return class_exists('Mecab');
				break;
			case 'index_table':
				return SearchIndex::get_instance();
				break;
			default:
				return null;
				break;
		}
	}

} 