<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opentime extends Model

{
    protected $fillable = [
      'parking_space_id' ,
      'date' ,
      'open_from' ,
      'open_till'
    ];
}
