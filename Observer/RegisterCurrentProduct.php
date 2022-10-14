<?php

/**
 * @package   Mediarox_CurrentProductAndCategory
 * @copyright Copyright 2021 (c) mediarox UG (haftungsbeschraenkt) (http://www.mediarox.de)
 * @author    Marcus Bernt <mbernt@mediarox.de>
 */

declare(strict_types=1);

namespace Mediarox\CurrentProductAndCategory\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Mediarox\CurrentProductAndCategory\Model\Registry\CurrentProduct;

class RegisterCurrentProduct implements ObserverInterface
{
    protected CurrentProduct $currentProduct;

    public function __construct(CurrentProduct $currentProduct)
    {
        $this->currentProduct = $currentProduct;
    }

    public function execute(Observer $observer)
    {
        $this->currentProduct->set($observer->getEvent()->getDataByKey('product'));
    }
}
