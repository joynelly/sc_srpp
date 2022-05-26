<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKurikulumUtama extends Model
{
    use HasFactory;

    public function kurikulum()
    {
        return $this->belongsTo('App\Models\Kurikulum');
    }

    public function dataKurikulumUser()
    {
        return $this->hasMany('App\Models\DataKurikulumUser');
    }
}
