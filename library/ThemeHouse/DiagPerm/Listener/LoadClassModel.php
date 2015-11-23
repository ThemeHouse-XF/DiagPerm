<?php
						
class ThemeHouse_DiagPerm_Listener_LoadClassModel extends ThemeHouse_Listener_LoadClass
{
	public static function loadClassModel($class, array &$extend)
	{
		switch ($class)
		{
			case 'XenForo_Model_AdminNavigation':
				self::_extend('ThemeHouse_DiagPerm_Model_AdminNavigation', $extend);
				break;
		}
	}
}