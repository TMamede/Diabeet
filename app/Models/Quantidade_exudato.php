<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantidade_exudato extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function integridades()
    {
        return $this->hasMany(Integridade_cutanea::class);
    }
}
