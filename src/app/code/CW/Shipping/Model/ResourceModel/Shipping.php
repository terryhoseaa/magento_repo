<?php
namespace CW\Shipping\Model\ResourceModel;


class Shipping extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('cw_shipping', 'post_id');
	}
	
}