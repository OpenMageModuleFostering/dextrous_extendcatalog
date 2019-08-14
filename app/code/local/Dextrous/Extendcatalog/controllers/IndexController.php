<?php

class Dextrous_Extendcatalog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		$this->loadLayout();     
		$this->renderLayout();
    }
	public function bestsellersAction()
    {

		$url = Mage::getUrl('no-route'); 

		$enable = Mage::getStoreConfig('extendcatalog/config1/active');
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
		}	
		else
		{
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle('Besesellers');    
		$this->renderLayout();
		}
    }
	public function featuredAction()
    {

		$url = Mage::getUrl('no-route'); 

		$enable = Mage::getStoreConfig('extendcatalog/config2/active');
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
		}

		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle('Featured Products');    
		$this->renderLayout();
    }
	
	public function newproductAction()
    {

		$url = Mage::getUrl('no-route'); 

		$enable = Mage::getStoreConfig('extendcatalog/config4/active');
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
		}

		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle('New products');    
		$this->renderLayout();
    }
	
	public function allproductAction()
    {

		$url = Mage::getUrl('no-route'); 

		$enable = Mage::getStoreConfig('extendcatalog/config5/active');
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
		}

		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle('All products');    
		$this->renderLayout();
    }

	public function recentlyorderedAction()
    {

		$url = Mage::getUrl('no-route'); 

		$enable = Mage::getStoreConfig('extendcatalog/config7/active');
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
		}

		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle('Recently Ordered Products');    
		$this->renderLayout();
    }
	
}