<?php
namespace CW\Shipping\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_shippingFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\CW\Shipping\Model\ShippingFactory $shippingFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_shippingFactory = $shippingFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$shipping = $this->_shippingFactory->create();
		$collection = $shipping->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
	}
}