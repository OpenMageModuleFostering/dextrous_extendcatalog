<?php

class Dextrous_Extendcatalog_Model_Mysql4_Extendcatalog extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('extendcatalog/extendcatalog', 'extendcatalog_id');
    }
}