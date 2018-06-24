<?php
/**
*  @package Biplob45Plugin
*/

class Biplob45PluginDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}