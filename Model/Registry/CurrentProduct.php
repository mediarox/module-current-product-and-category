<?php

/**
 * @package   Mediarox_CurrentProductAndCategory
 * @copyright Copyright 2021 (c) mediarox UG (haftungsbeschraenkt) (http://www.mediarox.de)
 * @author    Marcus Bernt <mbernt@mediarox.de>
 */

declare(strict_types=1);

namespace Mediarox\CurrentProductAndCategory\Model\Registry;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\Data\ProductInterfaceFactory;

class CurrentProduct
{
    protected ProductInterfaceFactory $productFactory;
    private ?ProductInterface $product = null;

    public function __construct(ProductInterfaceFactory $productFactory)
    {
        $this->productFactory = $productFactory;
    }

    public function set(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function get()
    {
        return $this->product ?? $this->productFactory->create();
    }
}
