<?php
/**
*  @package Biplob45Plugin
*/

class Biplob45PluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}