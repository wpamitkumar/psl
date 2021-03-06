<?php

declare(strict_types=1);

namespace Psl\Tests\Fun;

use PHPUnit\Framework\TestCase;
use Psl\Fun;

class RethrowTest extends TestCase
{
    public function testRethrow(): void
    {
        $exception = new \Exception('foo');
        $rethrow   = Fun\rethrow();

        $this->expectExceptionObject($exception);
        $rethrow($exception);
    }
}
