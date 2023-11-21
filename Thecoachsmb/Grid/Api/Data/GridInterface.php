<?php
namespace Thecoachsmb\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ARTICLE_ID = 'article_id';
    const TITLE = 'title';

    /**
     * Get ArticleId.
     *
     * @return int
     */
    public function getArticleId();

    /**
     * Set ArticleId.
     */
    public function setArticleId($articleId);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle();

    /**
     * Set Title.
     */
    public function setTitle($title);    
}