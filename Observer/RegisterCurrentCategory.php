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
use Mediarox\CurrentProductAndCategory\Model\Registry\CurrentCategory;

class RegisterCurrentCategory implements ObserverInterface
{
    protected CurrentCategory $currentCategory;

    public function __construct(CurrentCategory $currentCategory)
    {
        $this->currentCategory = $currentCategory;
    }

    public function execute(Observer $observer)
    {
        $this->currentCategory->set($observer->getEvent()->getDataByKey('category'));
    }
}
