<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function _initSomeservice()
	{
	    /*$someservice = 'frontend/';
	    Zend_Registry::set('path_include', $someservice);*/
	}

	protected function _initHelpers()
	{
	    $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
	    $viewRenderer->initView();
	 
	    // add zend view helper path
	    $viewRenderer->view->addHelperPath('ZF/View/Helper/');
	 
	    // add zend action helper path
	    Zend_Controller_Action_HelperBroker::addPath('ZF/Controller/Helper/');
	}
}
