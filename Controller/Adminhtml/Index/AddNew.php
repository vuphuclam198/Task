<?php
 
namespace AHT\Task\Controller\Adminhtml\Index;
 
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;
 
class AddNew extends \Magento\Backend\App\Action
{
    protected $_pageFactory;
 
    /**
     * @param \AHT\Task\Model\PostFactory
     */
    private $postFactory;

    public function __construct(Action\Context $context, PageFactory $pageFactory,
        \AHT\Task\Model\PostFactory $postFactory)
    {
        $this->_pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Add New Post'));
        return $resultPage;
    }
}