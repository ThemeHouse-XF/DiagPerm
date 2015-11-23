<?php
						
class ThemeHouse_DiagPerm_Model_AdminNavigation extends XFCP_ThemeHouse_DiagPerm_Model_AdminNavigation
{
	/**
	 * @return array [navigation id] => info
	 */
	public function getAdminNavigationEntries(array $fetchOptions = array())
	{
		$adminNavigationEntries = parent::getAdminNavigationEntries($fetchOptions);

		$adminNavigationEntries['diagnostics']['admin_permission_id'] = 'runDiagnostics';
	
		return $adminNavigationEntries;
	}
}