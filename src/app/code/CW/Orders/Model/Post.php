<?php
namespace CW\Orders\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'cw_orders';

	protected $_cacheTag = 'cw_orders';

	protected $_eventPrefix = 'cw_orders';

	protected function _construct()
	{
		$this->_init('CW\Orders\Model\ResourceModel\Post');
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