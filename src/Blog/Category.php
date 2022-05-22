<?php declare(strict_types = 1);

// Category
// - id
// - name / titre
// - description
// - image
// - created_at
// - created_by
// - edited_at
// - deleted_at

namespace App\Blog;

use App\Blog\Article;

class Category
{
    private $id;
    private $name;
    private $description;
    private $articles;

    public function __construct(int $id, string $name, ?string $description, array $articles = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->articles = $articles;

        // // if (!$articles) {
        // //     $this->articles = $articles;
        // // } else {
        // //     $this->articles = [];
        // // }
        
        // // fait la même chose que le if au dessus
        // // $this->articles = $articles ? $articles : [];

        // // fait la même chose que la ligne au dessus
        // $this->articles = $articles ?? [];
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    

    /**
     * Get the value of articles
     */ 
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * Set the value of articles
     *
     * @return  self
     */ 
    public function setArticles(array $articles): self
    {
        $this->articles = $articles;

        return $this;
    }

    public function addArticle(Article $article): self
    {
        if (!in_array($article, $this->articles)) {
            $this->$article[] = $article;
            
            return $this;
        }
    }

    public function removeArticle(Article $article): self
    {
        $index = array_search($article, $this->articles);

        if ($index !== false) {
            array_splice($this->articles, $index, 1);
        }

        return $this;
    }
}