<?php
namespace Blog\Posts\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Blog\Posts\Model\View::class, \Blog\Posts\Model\ResourceModel\View::class);
    }
}
