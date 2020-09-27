<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wallet;

class Transfer extends Model
{
    public function wallet(){
      return $this->belongsTo('App\Wallet');
    }
}
