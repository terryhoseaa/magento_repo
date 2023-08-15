<?php

namespace CW\Shipping\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class ShippingRecords implements ResolverInterface
{
    private $ShippingRecords;

    public function __construct(
        \CW\Shipping\Model\Resolver\DataProvider\ShippingRecords $ShippingRecords
    ) {
        $this->ShippingRecords = $ShippingRecords;
    }

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $ShippingRecords = $this->ShippingRecords->getShipping();
        return $ShippingRecords;
    }
}