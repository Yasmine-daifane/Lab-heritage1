<?php

namespace App\Models;
use  App\Traits\MorphType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personne;


class Formateur extends Personne
{
    use HasFactory , MorphType;
}

