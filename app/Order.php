<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
   use SoftDeletes;

   protected $table = 'orders';

   protected $fillable = [
    'product_id', 'user_id', 'quantity', 'address'
   ];


  public function users(){
     return $this->belongsTo(User::class);
  }

  public function orders(){
    return $this->belongsTo(Order::class);
  }


}
