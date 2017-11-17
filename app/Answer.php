<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer'
    ];

    public function comments()
    {
    	return $this->hasMany("App\AnswerComment");
    }

    public function user()
    {
    	return $this->belongsTo("App\User");
    }

    public function question()
    {
    	return $this->belongsTo("App\Question");
    }
}