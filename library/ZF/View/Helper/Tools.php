<?php
/**
 * Truncate helper
 *
 * @desc Verifica e corta uma string se for necessário
 * @uses Zend_View_Interface
 */
class Zend_View_Helper_Tools {

	public function tools() {

	}

	function baseUrl($string)
    {
    	$fc = Zend_Controller_Front::getInstance();
        $_baseUrl =  $fc->getBaseUrl();
    	return $_baseUrl.$string;
    }


	public function bodyClass() {
		return 'page-'.Zend_Controller_Front::getInstance()->getRequest()->getControllerName()."-".Zend_Controller_Front::getInstance()->getRequest()->getActionName();
	}

	public function skinCss($name){
		return self::baseUrl('/frontend/layout/css/'.$name);	
	}
	public function skinJs($name){
		return self::baseUrl('/frontend/layout/js/'.$name);	
	}
	public function skinImage($name){
		return self::baseUrl('/frontend/layout/images/'.$name);	
	}

	public function getMensages($flashmsgs){

		if(isset($flashmsgs)) { 
			$html = NULL;
            foreach($flashmsgs as $msg){ 
            	foreach ($msg as $key=> $diserrors) { 
                	$html .= '<div class="alert alert-danger '.$key.'"> <b>Ops: </b>'.$diserrors.'</div>';
                }
 			}
 			return $html;
 		}
	}
}