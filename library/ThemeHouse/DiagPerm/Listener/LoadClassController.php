<?php
						
class ThemeHouse_DiagPerm_Listener_LoadClassController extends ThemeHouse_Listener_LoadClass
{
	public static function loadClassController($class, array &$extend)
	{
		switch ($class)
		{
			case 'XenForo_ControllerAdmin_Tools':
				self::_extend('ThemeHouse_DiagPerm_ControllerAdmin_Tools', $extend);
				break;
		}
	}
}