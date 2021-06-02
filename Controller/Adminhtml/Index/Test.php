<?php
 
namespace AHT\Task\Controller\Adminhtml\Index;
 
use Magento\Backend\App\Action;
// use AHT\Task\Model\Post\;
use Magento\Backend\Model\View\Result\RedirectFactory;
 
class Save extends Action
{
    private $resultRedirect;
    private $postFactory;
 
    public function __construct(
        Action\Context $context,
        PostFactory $postFactory,
        RedirectFactory $redirectFactory
    )
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->resultRedirect = $redirectFactory;
    }
 
    public function execute()
    {
        
    }
    
}