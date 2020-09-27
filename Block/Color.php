<?php

namespace Ashraf\ColorConfig\Block;

use Magento\Framework\View\Element\Template;

class Color extends Template
{
    /**
     * @var string
     */
    protected $_template = 'Ashraf_ColorConfig::Colorconfig.phtml';

    /**
     * @var \Ashraf\ColorConfig\Helper\Data
     */
    protected $_dataHelper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Ashraf\ColorConfig\Helper\Data      $dataHelper
     * @param array                                  $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Ashraf\ColorConfig\Helper\Data $dataHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_dataHelper = $dataHelper;
    }

    public function getMenuBgColor()
    {
        return $this->_dataHelper->getMenuBgColor();
    }

    public function getSiteBgColor()
    {
        return  $this->_dataHelper->getSiteBgColor();
    }
}
