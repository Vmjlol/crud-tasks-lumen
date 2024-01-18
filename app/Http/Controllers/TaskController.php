<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function show($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->titulo = $request->titulo;
        $task->descricao = $request->descricao;
        $task->data_vencimento = $request->data_vencimento;
        $task->status = $request->status;
        $task->save();

        return response()->json(['message' => 'Tarefa criada com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->titulo = $request->titulo;
        $task->descricao = $request->descricao;
        $task->data_vencimento = $request->data_vencimento;
        $task->status = $request->status;
        $task->save();

        return response()->json(['message' => 'Tarefa atualizada com sucesso']);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json(['message' => 'Tarefa excluída com sucesso']);
    }
}
