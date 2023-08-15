<?php
namespace CW\RestApi\Api;
interface ProductRepositoryInterface
{
    /**
     * Return a filtered product.
     *
     * @param int $id
     * @return \CW\RestApi\Api\ResponseItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getItem(int $id);
    /**
     * Set descriptions for the products.
     *
     * @param \CW\RestApi\Api\RequestItemInterface[] $products
     * @return void
     */
    public function setDescription(array $products);
}
