<?php

namespace App;

use Illuminate\Support\Collection;

class Project
{
    public $name;
    public $tasks;

    public function __construct($name)
    {
        $this->name = $name;
        $this->tasks = new Collection();
    }

    public function addTask($id, $name){
        $task = new Task;
        $task->id = $id;
        $task->name = $name;
        $this->tasks->push($task);
    }

    public function findTask($id): Task
    {
        return $this->tasks->get($id);
    }

    public function getTask($id): string
    {
        $task = $this->tasks->get($id);
        return $task->name;
    }

    public function deleteTask($id)
    {
        // not yet implemented
        unset($this->tasks[$id]);
    }
}
