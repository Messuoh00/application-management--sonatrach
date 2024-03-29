<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichier extends Model
{ 
    use HasFactory;
    protected $fillable = ['route','publication_id'];
    public function publication(){
        return $this->belongsTo(Publication::class);
    }

}
