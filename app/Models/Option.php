<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public const QUESTION_ID = 'question_id';
    public const CONTENT = 'content';
    public const IS_CORRECT = 'is_correct';
    public const ORDER = 'order';

    protected $fillable = [
        self::QUESTION_ID,
        self::CONTENT,
        self::IS_CORRECT,
        self::ORDER,
    ];
}
