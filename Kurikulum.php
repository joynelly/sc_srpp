<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

    public function dataKurikulumUtama()
    {
        return $this->hasMany('App\Models\DataKurikulumUtama');
    }
}
