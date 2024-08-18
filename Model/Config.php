<?php
/**
 * Copyright © Hibrido. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace GFNL\CheckoutPWAStudio\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    const XML_CONFIG_GENERAL_PATH = 'gfnl_checkoutpwastudio/general/';
    const XML_CONFIG_GENERAL_LAYOUTS_PATH = self::XML_CONFIG_GENERAL_PATH . 'layouts';

    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {}

    public function getLayouts(): string
    {
        return $this->scopeConfig->getValue(self::XML_CONFIG_GENERAL_LAYOUTS_PATH, ScopeInterface::SCOPE_STORE);
    }
}
