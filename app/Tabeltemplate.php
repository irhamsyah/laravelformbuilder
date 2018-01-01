<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeltemplate extends Model
{
    //
    protected $table='tabeltemplate';
    protected $fillable=['kepala','isi','kaki','created_at','updated_at'];
}
