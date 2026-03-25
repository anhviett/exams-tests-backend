<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public const EXAM_ID = 'exam_id';
    public const CONTENT = 'content';
    public const TYPE = 'type';
    public const LEVEL = 'level';
    public const POINT = 'point';
    public const MEDIA_URL = 'media_url';

    protected $fillable = [
        self::EXAM_ID,
        self::CONTENT,
        self::TYPE,
        self::LEVEL,
        self::POINT,
        self::MEDIA_URL,
    ];
}
