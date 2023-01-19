<?php

namespace App\Controllers;

use App\Models\ProductModel;
use Fluent\Models\DB;

class ProductController extends BaseController
{
    public function index()
    {
        $data['products'] = ProductModel::all();
        return view('products', $data);
    }
}
