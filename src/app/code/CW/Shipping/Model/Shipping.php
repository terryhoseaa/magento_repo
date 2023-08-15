<?php
namespace CW\Shipping\Model;
class Shipping extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'cw_shipping';

	protected $_cacheTag = 'cw_shipping';

	protected $_eventPrefix = 'cw_shipping';

	protected function _construct()
	{
		$this->_init('CW\Shipping\Model\ResourceModel\Shipping');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}