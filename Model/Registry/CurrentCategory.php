<?php
/**
 * @package   Mediarox_CurrentProductAndCategory
 * @copyright Copyright 2021 (c) mediarox UG (haftungsbeschraenkt) (http://www.mediarox.de)
 * @author    Marcus Bernt <mbernt@mediarox.de>
 */

declare(strict_types=1);

namespace Mediarox\CurrentProductAndCategory\Model\Registry;

use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Catalog\Model\CategoryFactory;

class CurrentCategory
{
    protected CategoryFactory $categoryFactory;
    private ?CategoryInterface $category = null;

    public function __construct(CategoryFactory $categoryFactory)
    {
        $this->categoryFactory = $categoryFactory;
    }

    public function set(CategoryInterface $category)
    {
        $this->category = $category;
    }

    public function get()
    {
        return $this->category ?? $this->categoryFactory->create();
    }
}
