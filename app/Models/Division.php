<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function users(){

        return  $this->belongsToMany(User::class);

    }
    use HasFactory;
}
