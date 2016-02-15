<?php

class Ryaan_CategoryFilters_Model_Source_Filters extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{

    public function getAllOptions($withEmpty = true, $defaultValues = false)
    {
        $collection = Mage::getResourceModel('catalog/product_attribute_collection');
        $collection
            ->setItemObjectClass('catalog/resource_eav_attribute')
            ->addStoreLabel(Mage::app()->getStore()->getId())
            ->setOrder('position', 'ASC');
        $collection->addIsFilterableFilter();

        $options = [];

        foreach($collection as $item) {
            $options[] = ['value' => $item->getAttributeCode(), 'label' => $item->getFrontendLabel()];
        }

        return $options;
    }
}
