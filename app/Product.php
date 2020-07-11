<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= ['stock'];
	public function getPrice(){
    $price = $this->price / 100;
    return number_format($price, 2, '. ',' '). ' $';
    }
    public function categories(){
    return	$this->belongsToMany('App\Category');
    }
}
