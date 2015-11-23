<?php
						
class ThemeHouse_DiagPerm_ControllerAdmin_Tools extends XFCP_ThemeHouse_DiagPerm_ControllerAdmin_Tools
{
	public function actionIndex()
	{
		$visitor = XenForo_Visitor::getInstance();
	
		/* @var $response XenForo_ControllerResponse_View */
		$response = parent::actionIndex();
		
		$response->params['canRunDiagnostics'] = $visitor->hasAdminPermission('runDiagnostics');
		return $response;
	}
	
	public function actionTestFacebook()
	{
		$this->assertAdminPermission('runDiagnostics');
		
		return parent::actionTestFacebook();
	}

	public function actionFileCheck()
	{
		$this->assertAdminPermission('runDiagnostics');
	
		return parent::actionFileCheck();
	}
}