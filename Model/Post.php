<?php
 
namespace AHT\Task\Model;
 
class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('AHT\Task\Model\ResourceModel\Post');
    }
}