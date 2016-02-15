<?php
$this->startSetup();

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'filters', array(
    'group'         => 'Display Settings',
    'input'         => 'multiselect',
    'type'          => 'varchar',
    'backend'       => 'eav/entity_attribute_backend_array',
    'source'        => 'Ryaan_CategoryFilters_Model_Source_Filters',
    'label'         => 'Category Filters',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'input_renderer'=> 'adminhtml/catalog_category_helper_sortby_available',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$this->endSetup();
