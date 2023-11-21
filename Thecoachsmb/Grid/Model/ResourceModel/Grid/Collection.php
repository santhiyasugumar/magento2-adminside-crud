<?php
namespace Thecoachsmb\Grid\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'article_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Thecoachsmb\Grid\Model\Grid', 'Thecoachsmb\Grid\Model\ResourceModel\Grid');
    }
}
