<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //Table Name
    protected $table = 'pizza';
    //primary key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}
