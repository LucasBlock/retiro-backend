<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acampamento extends Model
{
    public $timestamps = false;
    protected $table = 'acampamento';
    protected $fillable = ['nome', 'inicio', 'fim', 'edicao'];
    protected $guarded = ['id'];

    public function campistas()
    {
        return $this->belongsToMany(Campista::class);
    }
}
