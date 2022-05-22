<?php declare(strict_types = 1);

namespace App\Todo;

use App\Test\Task;

class Category
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

    public function addTask(Task $task): self
    {
        if (!in_array($task, $this->tasks)) {
            $this->$task[] = $task;
            
            return $this;
        }
    }

    public function removeTask(Task $task): self
    {
        $index = array_search($task, $this->tasks);

        if ($index !== false) {
            array_splice($this->tasks, $index, 1);
        }

        return $this;
    }
}