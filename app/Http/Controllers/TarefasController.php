<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abas;
use App\Models\Tarefas;
use App\Models\User;


class TarefasController extends Controller
{
    public function index()
    {
        $abas = Abas::all();
        $tarefas = Tarefas::all();
        return response()->json([
            'status' => 200,
            'message' => 'Abas e Tarefas implementadas com sucesso!!',
            'tarefas' => $tarefas,
            'abas' => $abas,
            'loading' => false
        ]);
    }
    public function store(Request $request)
    {
        Tarefas::create([
            'aba' => $request->aba,
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'iscompleted' => false,
            'descricao' => $request->descricao,
            'button' => "Completar",
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Tarefa criada com sucesso'
        ]);
    }

    public function completarTask($id)
    {
        $tarefas = Tarefas::find($id);
        $up = $tarefas->update([
            'iscompleted' => true,
            'button' => 'Refazer'
        ]);
        if ($up) {
            return response()->json([
                'status' => 200,
                'message' => 'Task atualizada com sucesso',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Task não encontrada'

            ]);
        }
    }

    public function refazerTask($id)
    {
        $tarefas = Tarefas::find($id);
        $up = $tarefas->update([
            'iscompleted' => false,
            'button' => 'Completar'
        ]);
        if ($up) {
            return response()->json([
                'status' => 200,
                'message' => 'Task atualizada com sucesso',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Task não encontrada'

            ]);
        }
    }
    public function deleteTask($id)
    {
        $tarefas = Tarefas::find($id);
        $del = $tarefas->delete();
        if ($del) {
            return response()->json([
                'status' => 200,
                'message' => 'Task atualizada com sucesso',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Task não encontrada'

            ]);
        }
    }


    public function createAba(Request $request)
    {
        Abas::create([
            'titulo' => $request->titulo,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Aba criada com sucesso'
        ]);
    }


    public function deleteAba($id)
    {
        $aba = Abas::find($id);
        $del = $aba->delete();
        if ($del) {
            return response()->json([
                'status' => 200,
                'message' => 'Task atualizada com sucesso',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Task não encontrada'

            ]);
        }
    }
}
