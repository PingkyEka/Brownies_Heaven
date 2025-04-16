<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
    $product = [
        [
            'image' => 'product-1.jpg',
            'varian' => 'Brownies Klasik',
            'stok'=> '100',
            'harga'=> '60.000',
        ],
        [
            'image' => 'product-2.jpg',
            'varian' => 'Brownies Keju',
            'stok'=> '100',
            'harga'=> '70.000',
        ],
        [
            'image' => 'product-3.jpg',
            'varian' => 'Brownies Almond',
            'stok'=> '100',
            'harga'=> '80.000',
        ],
        [
            'image' => 'product-4.jpg',
            'varian' => 'Brownies Spesial',
            'stok'=> '100',
            'harga'=> '90.000',
        ],
    ];

    // Using Query Builder
    $this->db->table('product')->insertBatch($product);
    }
}
