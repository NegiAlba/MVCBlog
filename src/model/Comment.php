<?php
namespace App\src\model;

class Comment
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $id_user;
    /**
     * @var text
     */
    private $content;
    /**
     * @var int
     */
    private $id_article;
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
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }
    /**
     * @param int $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
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
     * @return int
     */
    public function getIdArticle()
    {
        return $this->id_article;
    }
    /**
     * @param int $id_article
     */
    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;
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
