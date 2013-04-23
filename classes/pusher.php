<?php

namespace Pusher;

class Client {

	public static $_instance = false;

	protected static $_config = null;

	public static function _init() {

		static::$_config = \Config::get('pusher');

	}


	public static function forge( ) {

		if (static::$_instance) 
			return static::$_instance;

		require_once PKGPATH.'pusher'.DS .'vendor'.DS.'pusher'.DS.'lib'.DS.'Pusher.php';

		static::$_instance = new \Pusher(
			static::$_config['app_key'],
			static::$_config['app_secret'],
			static::$_config['app_id']
		);

		return static::$_instance;

	}


	public static function __callStatic( $method, $arguments ) {
		
		if( !method_exists( static::forge(), $method ) )
			throw new Exception( 'No such method (' . $method . ')' );
		
		return call_user_func_array( array( static::forge(), $method ), $arguments );
		
	}


}