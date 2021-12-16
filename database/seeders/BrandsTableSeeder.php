<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'id' => 1,
                'brand_name_en'     => 'tapai',
                'brand_name_hin'    => 'tapai',
                'brand_slug_en'     => 'tapai',
                'brand_slug_hin'    => 'tapai',
                'brand_image'       => 'tapai',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        Brand::insert($brands);
    }
}
