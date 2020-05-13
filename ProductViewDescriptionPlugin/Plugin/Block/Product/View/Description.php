<?php

/**
 *
 * Copyright © 2019 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit3\ProductViewDescriptionPlugin\Plugin\Block\Product\View;

/**
 * Class Description
 * @package Unit3\ProductViewDescriptionPlugin\Block\Product\View
 */
class Description
{
    /**
     * @param \Magento\Catalog\Block\Product\View\Description $description
     */
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $result)
    {
        $result->getProduct()->setDescription('test description!!!!!');
    }
}
