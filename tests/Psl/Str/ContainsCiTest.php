<?php

declare(strict_types=1);

namespace Psl\Tests\Str;

use PHPUnit\Framework\TestCase;
use Psl\Str;

class ContainsCiTest extends TestCase
{
    /**
     * @dataProvider provideData
     */
    public function testContainsCi(bool $expected, string $haystack, string $needle, int $offset = 0): void
    {
        self::assertSame($expected, Str\contains_ci($haystack, $needle, $offset));
    }

    public function provideData(): array
    {
        return [
            [true, 'Hello, World', 'Hello', 0],
            [true, 'Hello, World', 'world', 0],
            [true, 'Hello, World', '', 8],
            [false, 'hello, world', 'hey', 5],
            [true, 'Azjezz', 'az', 0],
            [false, 'azjezz', 'Az', 2],
            [true, 'مرحبا بكم', 'بكم', 5],
        ];
    }
}
