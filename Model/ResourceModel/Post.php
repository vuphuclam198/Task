<?php
 
namespace AHT\Task\Model\ResourceModel;
 
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('hello_post', 'post_id');
    }
}