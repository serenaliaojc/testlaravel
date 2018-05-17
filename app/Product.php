<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

// 1. use pural num in table name
// 2. id for table is called only id (lowercase)
class Product extends Model
{
	
	protected $table = 'products';
	protected $primaryKey = 'id';
	
	public $timestamps = false; 
	// when it is not a part of table
	protected $fillable = ['name'];
}


 ?>