<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    
    protected $fillable = ['nome', 'descricao', 'valor', 'quantidade'];
    
}
