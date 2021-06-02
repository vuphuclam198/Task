<?php
 
namespace AHT\Task\Model\ResourceModel\Post;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
 
    protected function _construct()
    {
        $this->_init('AHT\Task\Model\Post', 'AHT\Task\Model\ResourceModel\Post');
    }
}
