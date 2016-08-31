<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable=['leave_start, leave_end, leave_desc, leave_is_approved'];

    protected $cast = ['user_id' => 'int'];
}
