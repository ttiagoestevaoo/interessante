<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','body','excerpt'];
    
    public function path()
    {
        return route('articles.show', $this->id);
    }
}
