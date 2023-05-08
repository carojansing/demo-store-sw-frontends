<?php

namespace Basecom\TemplatePlugin\Tests\Unit;

use Basecom\TemplatePlugin\BasecomTemplatePlugin;
use PHPUnit\Framework\TestCase;

class BasecomTemplatePluginTest extends TestCase
{
    /** @test */
    public function simpleTest(): void
    {
        $class = new BasecomTemplatePlugin(true, __DIR__.'/../../src');
        self::assertEquals('This is just a test for coverage. Please remove me!', $class->doSomething());
    }
}