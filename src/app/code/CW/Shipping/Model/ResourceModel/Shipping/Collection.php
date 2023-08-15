<?php
namespace CW\Shipping\Model\ResourceModel\Shipping;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'cw_shipping_collection';
	protected $_eventObject = 'shipping_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('CW\Shipping\Model\Shipping', 'CW\Shipping\Model\ResourceModel\Shipping');
	}

}