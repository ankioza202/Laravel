<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
     'name',
     'assigned',
     'created_at'

    ];
}
