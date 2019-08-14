<?php
class Dextrous_Extendcatalog_Block_Extendcatalog extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getExtendcatalog()     
     { 
        if (!$this->hasData('extendcatalog')) {
            $this->setData('extendcatalog', Mage::registry('extendcatalog'));
        }
        return $this->getData('extendcatalog');
        
    }
}