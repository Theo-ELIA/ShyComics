<?php
	abstract class Library_String
	{
		public static function hash($password)
		{
			$security = \Eliya\Config('main')->SECURITY;
			$salt = $security['SALT'];
			return sha1($password . $salt);
		}
	}