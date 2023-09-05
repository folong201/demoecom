<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //fonction pour dire qu;un article apartien a un seul utilisateur
    public function user(){
        return $this->belongsTo(User::class);
    }
    //fonction pour dire q'un article possede plusieur commentaires

    public function commentaire(){
        return $this->hasMany(commentaire::class);
    }
}
