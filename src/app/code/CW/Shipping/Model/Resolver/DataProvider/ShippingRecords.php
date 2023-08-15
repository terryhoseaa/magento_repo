<?php

namespace CW\Shipping\Model\Resolver\DataProvider;

class ShippingRecords
{
    private $ShippingFactory;

     public function __construct(
          \CW\Shipping\Model\ShippingFactory $ShippingFactory
     ) {
          $this->ShippingFactory = $ShippingFactory;
     }

    public function getShipping()
    {
        try {
            $collection = $this->ShippingFactory->create()->getCollection();
            $Records = $collection->getData();

        } catch (NoSuchEntityException $e) {
            throw new GraphQlNoSuchEntityException(__($e->getMessage()), $e);
        }
        return $Records;
    }
}