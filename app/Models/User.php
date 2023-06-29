<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nombre', 'apellido', 'email', 'password', 'tipo_documento_id'];
    use HasFactory;
    public function tipoDocumento()
{
    return $this->belongsTo(DocumentType::class, 'tipo_documento_id');
}
}
