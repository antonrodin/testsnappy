<?php

namespace App\Http\Controllers;

use App\Exports\TaskExport;
use App\Task;
use Maatwebsite\Excel\Facades\Excel;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);
    }

    public function export()
    {
        return Excel::download(new TaskExport(), 'tasks.xlsx');
    }
}
