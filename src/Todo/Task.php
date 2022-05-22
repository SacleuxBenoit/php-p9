<?php declare(strict_types = 1);

namespace App\Todo;

use App\Todo\Category;
use App\Todo\Tag;
use App\Todo\User;
use DateTime;


class Task
{
    private $id;
    private $name;
    private $description;
    private $deadline;
    private $done;
    private $tags;
    private $responsable;
    private $category;

    public function __construct(int $id, string $name, string $description, DateTime $deadline, bool $done, array $tags = [], User $responsable, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->deadline = $deadline;
        $this->done = $done;
        $this->tags = $tags;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of deadline
     */ 
    public function getDeadline(): DateTime
    {
        return $this->deadline;
    }

    /**
     * Set the value of deadline
     *
     * @return  self
     */ 
    public function setDeadline(DateTime $deadline): self
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get the value of done
     */ 
    public function getDone(): bool
    {
        return $this->done;
    }

    /**
     * Set the value of done
     *
     * @return  self
     */ 
    public function setDone(bool $done): self
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get the value of tags
     */ 
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag(Tag $tag): self
    {
        // si le tag n'est pas déjà présent dans la liste, on l'ajoute à la liste
        if (!in_array($tag, $this->tags)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag):self
    {
        $index = array_search($tag, $this->tags);

        if($index !== false) {
            array_splice($this->tags, $index, 1);
        }

        return $this;
    }

    /**
     * Get the value of responsable
     */ 
    public function getResponsable(): User
    {
        return $this->responsable;
    }

    /**
     * Set the value of responsable
     *
     * @return  self
     */ 
    public function setResponsable(User $responsable): self
    {
        $this->responsable = $responsable;

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

        return $this;
    }
}