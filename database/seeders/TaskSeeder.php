<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Task 1',
                'user_id' => 1,
            ],
            [
                'name' => 'Task 2',
                'user_id' => 1,
            ],
            [
                'name' => 'Task 3',
                'user_id' => 1,
            ],
        ];

        foreach ($tasks as $task) {
            \App\Models\Task::create($task);
        }

        // \App\Models\User::factory(10)->create();
    }
}
