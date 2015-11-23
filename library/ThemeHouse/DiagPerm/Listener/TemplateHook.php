<?php

class ThemeHouse_DiagPerm_Listener_TemplateHook extends ThemeHouse_Listener_TemplateHook
{
	public function run() {
		switch ($this->_hookName)
		{
			case 'admin_icons_tools':
				$this->_adminIconsTools();
				break;
		}
		return parent::run();
	}
	
	public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
	{
		$templateHook = new ThemeHouse_DiagPerm_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
		$contents = $templateHook->run();
	}
	
	protected function _adminIconsTools()
	{
		if (!XenForo_Visitor::getInstance()->hasAdminPermission('runDiagnostics'))
		{
			$codeSnippet = $this->_render('th_tools_splash_facebook_remove_diagperm');
			$this->_replaceAtCodeSnippet($codeSnippet, '');
		}
	}
}