<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatgory extends Model
{
     function get_catgory()
    {
        return $this->belongsTo('App\User');
    }

}
