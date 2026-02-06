<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zeiterfassung extends Model
{
    protected $fillable = ['Kategorie', 'Arbeitsbeginn', 'Arbeitsende', 'Mittagspause', 'Arbeitszeit', 'Soll_Arbeitszeit', 'Ueberstunden_Minusstunden'];
}
