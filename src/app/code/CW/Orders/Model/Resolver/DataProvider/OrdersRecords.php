<?php

namespace CW\Orders\Model\Resolver\DataProvider;

class OrdersRecords
{
    private $OrdersFactory;

     public function __construct(
          \CW\Orders\Model\OrdersFactory $OrdersFactory
     ) {
          $this->OrdersFactory = $OrdersFactory;
     }

    public function getRecords()
    {
        try {
            $collection = $this->OrdersFactory->create()->getCollection();
            $Records = $collection->getData();

        } catch (NoSuchEntityException $e) {
            throw new GraphQlNoSuchEntityException(__($e->getMessage()), $e);
        }
        return $Records;
    }
}