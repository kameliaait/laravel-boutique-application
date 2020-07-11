<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    function discount($subtotal){
        return( $subtotal*( $this->percent_off /100));
    }
}
