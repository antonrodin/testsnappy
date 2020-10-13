<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
                [
                    'task' => "Sacar al perro",
                    'priority' => 'urgente',
                    'completado' => 0,
                ],
                [
                    'task' => "Hacer la compra",
                    'priority' => 'urgente',
                    'completado' => 1,
                ],
                [
                    'task' => "Poner la lavadora",
                    'priority' => 'no urgente',
                    'completado' => 1,
                ],
                [
                    'task' => "Procrastinar",
                    'priority' => 'crítico',
                    'completado' => 0,
                ],
                [
                    'task' => "Ir al cine",
                    'priority' => 'algún dia',
                    'completado' => 1,
                ]
            ]);
    }
}
