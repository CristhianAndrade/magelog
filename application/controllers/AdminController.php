<?php

class AdminController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout->setLayout('admin');

        $flashMessenger = $this->_helper->getHelper('FlashMessenger');
        $this->view->flashmsgs = $flashMessenger->getMessages();  //pass it to view 
    }

    public function indexAction()
    {
        $this->_helper->layout->disableLayout();
        if(Application_Model_Admin_Admin::checkSession()){
            $this->_redirect('admin/dashboard');
        }
        else{
            $this->_redirect('admin/login');
        }
        
    }

    public function dashboardAction()
    {
        $this->_helper->layout->disableLayout();
        if(!Application_Model_Admin_Admin::checkSession()){
            $flashMessenger = $this->_helper->getHelper('FlashMessenger');
            $flashMessenger->addMessage(array('error' => 'Você precisar estar logado'));
            $this->_redirect('admin/login');
            return;
        }
    }

    public function loginAction()
    {
        $this->view->title = "Admin - Magelog";
    }

    public function logoutAction()
    {
        // action body
    }


}

