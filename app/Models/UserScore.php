<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'test_skill_id',
        'total_score',
        'total_questions',
        'correct_answers',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function testSkill() {
        return $this->belongsTo(TestSkill::class);
    }

}
