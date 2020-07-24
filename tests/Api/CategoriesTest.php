<?php

namespace Grayloon\Magento\Tests;

use Grayloon\Magento\Api\Categories;
use Grayloon\Magento\Magento;
use Illuminate\Support\Facades\Http;

class CategoriesTest extends TestCase
{
    public function test_can_call_magento_api_categories()
    {
        $magento = new Magento();

        $this->assertInstanceOf(Categories::class, $magento->api('categories'));
    }

    public function test_can_call_magento_api_categories_all()
    {
        Http::fake();

        $magento = new Magento();

        $this->assertNull($magento->api('categories')->all());
    }
}
