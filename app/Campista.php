<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campista extends Model
{
    public $timestamps = false;
    protected $table = 'campistas';
    protected $fillable = ['name', 'camisa', 'email','sexo'];
    protected $guarded = ['id'];

    public function acampamento()
    {
        return $this->belongsToMany(Acampamento::class);
    }
}
