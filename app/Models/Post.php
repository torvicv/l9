<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function title(): Attribute {
        return new Attribute(
            set: fn($value) => strtoupper($value)
        );
    }

    public function toSearchableArray() {
        return [
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}
