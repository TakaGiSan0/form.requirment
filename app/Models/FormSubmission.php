<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    protected $fillable = [
        'name',
        'tanggal',
        'shift',
        'helm_safety',
        'rompi_safety',
        'sarung_tangan',
        'sepatu_safety',
        'masker'
    ];
}
