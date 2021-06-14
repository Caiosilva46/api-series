<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function getAssistidoAtribbute($assistido): bool
    {
        return $assistido;
    }
}