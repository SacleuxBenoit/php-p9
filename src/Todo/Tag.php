<?php declare(strict_types = 1);

namespace App\Todo;

class Tag
{
    private $id;
    private $name;
    private $tasks;

    public function __construct(int $id, string $name, array $tasks = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->tasks = $tasks;
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
     * Get the value of tasks
     */ 
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */ 
    public function setTasks(array $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }
}