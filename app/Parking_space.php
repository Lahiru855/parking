<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_space extends Model
{
    protected $fillable = [
      'landowner_id' ,
      'admin_id' ,
      'name' ,
      'address' ,
      // 'image' ,
      // 'open_days'
      // 'open_from' ,
      // 'open_till' ,
      // 'open_status' ,
      'description',
      'reservation_status_on',
      'reservation_status_off',
      'poya',
      'bank',
      'public',
      'verified'
    ];
}
