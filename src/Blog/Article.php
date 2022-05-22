<?php declare(strict_types = 1);

// Article
// - category
// - id
// - author
// - title
// - summary
// - body
// - tag
// - image
// - published_at
// - created_at
// - created_by
// - edited_at
// - edited_by
// - deleted_at
// - deleted_by

namespace App\Blog;

use App\Blog\Category;

class Article
{
    private $id;
    private $title;
    private $body;
    private $category;

    public function __construct(int $id, string $title, string $body, Category $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->setCategory($category);
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory(Category $category): self
    {
        $this->category = $category;

        $category->addArticle($this);

        return $this;
    }
}
