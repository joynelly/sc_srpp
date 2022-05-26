<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function kurikulum()
    {
        return $this->belongsTo('App\Models\Kurikulum');
    }

    public function dataKurikulumUser()
    {
        return $this->hasMany('App\Models\DataKurikulumUser');
    }
}
