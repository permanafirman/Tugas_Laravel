<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
   protected $fillable = ['name, desc'];

   protected $cast = ['user_id' => 'int'];
}
