<?php

namespace Tests\Unit;

use App\Models\Task;
use Faker\Factory;
use Mockery\Mock;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_gets_a_tasks_details()
    {
        $name = 'Watch Laracasts';
        $description = 'Rewatch the PHP Practicioner and Laravel 8 from Scratch Laracasts';

        $task = new Task([
            'name' => $name,
            'description' => $description,
            'status' => false,
        ]);

        $task_name = $task->getName();
        $task_description = $task->getDescription();
        $task_status = $task->getStatus();

        $this->assertEquals($name, $task_name);
        $this->assertEquals($description, $task_description);
        $this->assertEquals(false, $task_status);
    }
}
