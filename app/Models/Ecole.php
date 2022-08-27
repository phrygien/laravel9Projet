<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    protected $table = "ecoles";

    protected $fillable = [
        'ecole_name',
        'ecole_code',
        'ecole_logo',
        'ecole_telephone',
        'ecole_email',
        'ecole_ville',
        'ecle_adresse',
        'ecole_note',
        'ecole_status',
        'ecole_responsable',
        'ecole_responsable_email'
    ];
}
