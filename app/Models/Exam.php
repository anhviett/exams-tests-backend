<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public const TITLE = 'title';
    public const DESCRIPTION = 'description';
    public const PASS_SCORE = 'pass_score';
    public const DURATION = 'duration';
    public const TOTAL_QUESTIONS = 'total_questions';
    public const STATUS = 'status';
    public const START_TIME = 'start_time';
    public const END_TIME = 'end_time';
    protected $fillable = [
        self::TITLE,
        self::DESCRIPTION,
        self::PASS_SCORE,
        self::DURATION,
        self::TOTAL_QUESTIONS,
        self::STATUS,
        self::START_TIME,
        self::END_TIME,
    ];

}
