<?php

namespace CW\Orders\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class OrdersRecords implements ResolverInterface
{
    private $OrdersRecords;

    public function __construct(
        \CW\Orders\Model\Resolver\DataProvider\OrdersRecords $OrdersRecords
    ) {
        $this->OrdersRecords = $OrdersRecords;
    }

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $OrdersRecords = $this->OrdersRecords->getRecords();
        return $OrdersRecords;
    }
}