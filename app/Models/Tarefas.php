<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;

    protected $fillable = [
        'aba',
        'titulo',
        'categoria',
        'iscompleted',
        'button',
        'descricao'
    ];
}
