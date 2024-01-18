<?php

namespace App\Http\Controllers;

use App\Models\Subtask;
use Illuminate\Http\Request;

class SubsubtaskController extends Controller
{
    public function index()
    {
        $subsubtasks = Subtask::all();
        return response()->json($subsubtasks);
    }

    public function show($id)
    {
        $subtask = Subtask::find($id);
        return response()->json($subtask);
    }

    public function store(Request $request)
    {
        $subtask = new Subtask;
        $subtask->titulo = $request->titulo;
        $subtask->id_tarefa = $request->id_tarefa;
        $subtask->descricao = $request->descricao;
        $subtask->status = $request->status;
        $subtask->save();

        return response()->json(['message' => 'Subtarefa criada com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $subtask = Subtask::find($id);
        $subtask->titulo = $request->titulo;
        $subtask->id_tarefa = $request->id_tarefa;
        $subtask->descricao = $request->descricao;
        $subtask->status = $request->status;
        $subtask->save();

        return response()->json(['message' => 'Subtarefa atualizada com sucesso']);
    }

    public function destroy($id)
    {
        $subtask = Subtask::find($id);
        $subtask->delete();

        return response()->json(['message' => 'Subtarefa excluída com sucesso']);
    }
}
