<?php

namespace App\Http\Controllers;

use App\Exports\ProductDataExport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function exportExcel()
    {
        return Excel::download( new ProductDataExport, 'products-data.xlsx');

    }
}
