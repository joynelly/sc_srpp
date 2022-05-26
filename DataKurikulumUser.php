<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKurikulumUser extends Model
{
    use HasFactory;

    public function dataKurikulumUtama()
    {
        return $this->belongsTo('App\Models\DataKurikulumUtama');
    }

    public function students()
    {
        return $this->belongsTo('App\Models\students');
    }
}
