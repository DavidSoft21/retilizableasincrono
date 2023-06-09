<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;
    protected $table = 'opciones';
    protected $fillable = [
        'nombre'
    ];

    public function temarios()
    {
        return $this->belongsToMany(Temario::class);
    }
}
