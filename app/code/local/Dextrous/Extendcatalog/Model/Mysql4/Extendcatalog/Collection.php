<?php

class Dextrous_Extendcatalog_Model_Mysql4_Extendcatalog_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('extendcatalog/extendcatalog');
    }
}