<?php

namespace App\src\model;

class Article
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var text
     */
    private $content;
    /**
     * @var string
     */
    private $author;
    /**
     * @var datetime
     */
    private $createdAt;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * @return text
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    /**
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
