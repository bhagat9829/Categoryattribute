<?php

namespace Dotsquares\Categoryattribute\Block\Index;

class Index extends \Magento\Framework\View\Element\Template {

    /**
     * @param \Magento\Framework\Registry $registry
     */
    protected $_categoryFactory;
    protected $_registry;

    public function __construct(\Magento\Catalog\Block\Product\Context $context,
            \Magento\Framework\Registry $registry, 
            \Magento\Catalog\Model\CategoryFactory $categoryFactory,
            array $data = []) {
        $this->_registry = $registry;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }
 
    protected function _prepareLayout() {
        return parent::_prepareLayout();
    }

    public function getCurrentcat() {

        $current_cat_id = $this->_registry->registry('current_category')->getId();
        $categoryData = $this->_categoryFactory->create()->load($current_cat_id);
        $getContent = $categoryData->getData('cusotm_categoryattribute'); //is_home_page = your attribute code
        return $getContent;
    }

}
