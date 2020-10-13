@extends('layouts.app')

@section('content')
    <h1>Test Laravel Excel...</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque beatae deserunt dolores eligendi eum
        inventore iure laboriosam minus, modi nobis nostrum nulla numquam perferendis porro quos similique voluptate
        voluptatem.</p>
    <p>
        <a href="/tasks/export" class="btn btn-primary">Export (.xls)</a>
    </p>
@endsection

@section('invoice')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table">

                    <thead>
                        <tr>
                            <th>
                                Tarea
                            </th>
                            <th>
                                Prioridad
                            </th>
                            <th>
                                Completado
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->task }}</td>
                            <td>{{ $task->priority }}</td>
                            <td>{{ $task->completado }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
