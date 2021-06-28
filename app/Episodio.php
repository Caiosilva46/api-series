<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function getAssistidoAtribbute($assistido): bool
    {
        return $assistido;
    }

    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/episodios/' . $this->serie_id,
            'serie' => '/api/series/' . $this->serie_id,
        ];
    }
}