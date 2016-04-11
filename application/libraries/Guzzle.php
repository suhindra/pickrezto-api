<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guzzle
{
	
	public function __construct()
	{
		require_once APPPATH . 'third_party/guzzle/autoloader.php';
	}
}