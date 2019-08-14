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
		$url 	= 	Mage::getUrl('no-route'); 
		$store 	= 	Mage::app()->getStore();
		$code  	= 	$store->getCode();
		$enable = Mage::getStoreConfig('extendcatalog/config1/active',$code);
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
			return;
		}	
		$title	=	Mage::getStoreConfig('extendcatalog/config1/title',$code);
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle($title);  
		$this->renderLayout();
    }
	public function featuredAction()
    {
		$url 	= 	Mage::getUrl('no-route'); 
		$store 	= 	Mage::app()->getStore();
		$code  	= 	$store->getCode();
		
		$enable = Mage::getStoreConfig('extendcatalog/config2/active',$code);
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
			return;
		}
		$title	=	Mage::getStoreConfig('extendcatalog/config2/title',$code);
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle($title);     
		$this->renderLayout();
    }
	public function mostviewedAction()
    {
		$url 	= 	Mage::getUrl('no-route'); 
		$store 	= 	Mage::app()->getStore();
		$code  	= 	$store->getCode();

		$enable = Mage::getStoreConfig('catalogextensions/config3/active',$code);
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
			return;
		}

		$title	=	Mage::getStoreConfig('extendcatalog/config3/title',$code);
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle($title);     
		$this->renderLayout();
    }
	
	public function newproductAction()
    {
		$url 	= 	Mage::getUrl('no-route'); 
		$store 	= 	Mage::app()->getStore();
		$code  	= 	$store->getCode();
		
		$enable = Mage::getStoreConfig('extendcatalog/config4/active',$code);
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
			return;
		}
		$title	=	Mage::getStoreConfig('extendcatalog/config4/title',$code);
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle($title);    
		$this->renderLayout();
    }
	
	public function allproductAction()
    {
		$url 	= 	Mage::getUrl('no-route'); 
		$store 	= 	Mage::app()->getStore();
		$code  	= 	$store->getCode();

		$enable = Mage::getStoreConfig('extendcatalog/config5/active',$code);
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
			return;
		}

		$title	=	Mage::getStoreConfig('extendcatalog/config5/title',$code);
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle($title);    
		$this->renderLayout();
    }

	public function recentlyorderedAction()
    {
		$url 	= 	Mage::getUrl('no-route'); 
		$store 	= 	Mage::app()->getStore();
		$code  	= 	$store->getCode();
		
		$enable = Mage::getStoreConfig('extendcatalog/config7/active',$code);
		if($enable != 1) 
		{
			Mage::app()->getFrontController()->getResponse()->setRedirect($url);
			return;
		}
		$title	=	Mage::getStoreConfig('extendcatalog/config7/title',$code);
		$this->loadLayout(); 
		$this->getLayout()->getBlock('head')->setTitle($title);    
		$this->renderLayout();
    }
	
}