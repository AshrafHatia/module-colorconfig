<?php

namespace Ashraf\ColorConfig\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;

/**
 * config data helper
 */
class Data extends AbstractHelper
{
    /**
     * ScopeConfigInterface scopeConfig
     *
     * @var scopeConfig
     */
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getMenuBgColor()
    {
        return  $this->scopeConfig->getValue('ColorConfig/design/menubgcolor', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }

    public function getSiteBgColor()
    {
        return  $this->scopeConfig->getValue('ColorConfig/design/BgColor', ScopeConfigInterface::SCOPE_TYPE_DEFAULT);
    }
}
