<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'filiere_id'
    ];

    public function filiere() {
        return $this->belongsTo(Filiere::class);
    }
}
