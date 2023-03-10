<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamBatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'batch_id',
    ];
}
