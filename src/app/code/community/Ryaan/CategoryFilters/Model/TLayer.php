<?php

trait Ryaan_CategoryFilters_Model_TLayer
{
    /**
     * Add filters to attribute collection
     *
     * @param   Mage_Catalog_Model_Resource_Category_Attribute_Collection $collection
     * @return  Mage_Catalog_Model_Resource_Category_Attribute_Collection
     */
    protected function _prepareAttributeCollection($collection)
    {
        $collection->addIsFilterableFilter();

        $filters = $this->getCurrentCategory()->getFilters();
        $filters = preg_split('/,/', $filters, null, PREG_SPLIT_NO_EMPTY);

        if (!empty($filters)) {

            $collection->addFieldToFilter('attribute_code', ['in' => $filters]);

        }

        return $collection;
    }
}
