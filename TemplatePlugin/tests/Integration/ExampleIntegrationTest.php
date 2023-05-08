<?php

namespace Basecom\TemplatePlugin\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Content\Test\Product\ProductBuilder;
use Shopware\Core\Framework\Test\IdsCollection;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;

class ExampleIntegrationTest extends TestCase
{
    use IntegrationTestBehaviour;

    /** @test */
    public function simpleTest(): void
    {
        $product = (new ProductBuilder(new IdsCollection(), '1000'))
            ->price(10)
            ->name('Lorem ipsum')
            ->visibility()
            ->build();

        self::assertNotEmpty($product['id']);
    }
}