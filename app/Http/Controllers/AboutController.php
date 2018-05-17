<?php 

namespace App\Http\Controllers;

use App\Product;

class AboutController extends Controller
{
	public function index($id)
	{
		$product = Product::find($id);

		// dd($product);
		return $product;

		$data = [
			'name' => 'marie',
			'email' => 'marie@gmail.com',
			'program' => 'web development'
		];

		$country = 'canada';

		// return view('infos.about')->with('data', $data)->with('country',$country);
		// return view('infos.about', ['data' => $data, 'country' => $country]);
		return view('infos.about', compact('data','country'));
	}
}



 ?>