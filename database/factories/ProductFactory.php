<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_id' => $this->faker->randomDigit,
            'category_id' => $this->faker->randomDigit,
            'subcategory_id' => $this->faker->randomDigit,
            'subsubcategory_id' => $this->faker->randomDigit,
            'product_name_en'   => $this->faker->sentence(),
            'product_name_hin'   => $this->faker->sentence(),
            'product_slug_en'   => $this->faker->slug,
            'product_slug_hin'   => $this->faker->slug,
            'product_code'   => $this->faker->swiftBicNumber,
            'product_qty' => $this->faker->randomDigit,
            'product_tags_en' => $this->faker->sentence(),
            'product_tags_hin' => $this->faker->sentence(),
            'product_size_en'   => $this->faker->sentence(),
            'product_size_hin'   => $this->faker->sentence(),
            'product_color_en'  => $this->faker->sentence(),
            'product_color_hin'  => $this->faker->sentence(),
            'selling_price' => "50000",
            'discount_price' => "",
            'long_descp_en'  => $this->faker->sentence(),
            'long_descp_hin'  => $this->faker->sentence(),
            'short_descp_en'    => $this->faker->sentence(),
            'short_descp_hin'   => $this->faker->sentence(),
            'product_thambnail' => $this->faker->sentence(),
            'hot_deals' => NULL,
            'featured' => NULL,
            'special_offer' => NULL,
            'special_deals' => NULL,
            'status' => 0,
        ];
    }
}
