<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function labels()
    {
        return $this->hasMany(Label::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }



}
