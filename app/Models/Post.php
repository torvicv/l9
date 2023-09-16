<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use PostState;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'body'
    ];

    protected $cast = [
        'state' => PostState::class
    ];

    public function toSearchableArray() {
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}
