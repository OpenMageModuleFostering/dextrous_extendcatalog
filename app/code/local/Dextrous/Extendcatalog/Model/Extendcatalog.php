<?php

class Dextrous_Extendcatalog_Model_Extendcatalog extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('extendcatalog/extendcatalog');
    }
}