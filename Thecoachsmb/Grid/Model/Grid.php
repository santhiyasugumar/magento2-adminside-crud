<?php
namespace Thecoachsmb\Grid\Model;

use Thecoachsmb\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'thecoachsmb_article';

    /**
     * @var string
     */
    protected $_cacheTag = 'thecoachsmb_article';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'thecoachsmb_article';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Thecoachsmb\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->getData(self::ARTICLE_ID);
    }

    /**
     * Set EntityId.
     */
    public function setArticleId($articleId)
    {
        return $this->setData(self::ARTICLE_ID, $articleId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title.
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}