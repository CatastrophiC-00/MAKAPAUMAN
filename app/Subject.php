<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     public function subjectstrand()
    {
    	return $this->hasMany(SubjectStrand::class);
    }

     public function section()
    {
    	return $this->hasMany(Section::class);
    }
}
