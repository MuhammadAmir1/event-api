<?php

namespace App;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable = ['title', 'description', 'start_date', 'end_date', 'street_address', 'city', 'state', 'image'];

}
