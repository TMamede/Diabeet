<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comorbidade extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function historicos()
    {
        return $this->belongsToMany(Historico::class);
    }
}
