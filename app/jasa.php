<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    protected $connection = 'mysql';
    protected $table = 'jasa';
    protected $fillable = ['nama_pengusaha','nama_usaha'];
}
