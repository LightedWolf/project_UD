<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormularioContacto extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message'];
}
