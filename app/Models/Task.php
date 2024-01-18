<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'data_vencimento', 'status',
    ];

}

