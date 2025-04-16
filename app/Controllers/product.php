<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        log_message('debug', 'Product controller accessed');

        try {
            $model = new ProductModel();
            
            $data = [
                'products' => $model->getProducts() // Perhatikan pemanggilan fungsi yang benar
            ];

            log_message('debug', 'Jumlah produk ditemukan: ' . count($data['products']));

            return view('pages/product', $data);
        } catch (\Exception $e) {
            log_message('error', 'Error: ' . $e->getMessage());

            echo "<div style='background-color:red;color:white;padding:10px;'>";
            echo "Error: " . $e->getMessage();
            echo "<br>File: " . $e->getFile();
            echo "<br>Line: " . $e->getLine();
            echo "</div>";

            $data = [
                'products' => [],
                'error' => $e->getMessage()
            ];
            return view('pages/product', $data);
        }
    }
}