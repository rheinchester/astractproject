<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;
    // WHy public and why protected
    protected $table  = 'workshops';
    protected $primaryKey  = 'id';
    public $timestamps  = true;

    public function users()
    {
        $this->belongsToMany('App\User');
    }






}
