<?php

namespace App\Enums;

enum PostState: string {
    case Draft = 'draft';
    case Plublished = 'published';
    case Staged = 'staged';
}
