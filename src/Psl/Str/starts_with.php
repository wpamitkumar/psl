<?php

declare(strict_types=1);

namespace Psl\Str;

use Psl;

/**
 * Returns whether the string starts with the given prefix.
 *
 * @psalm-pure
 *
 * @throws Psl\Exception\InvariantViolationException If an invalid $encoding is provided.
 */
function starts_with(string $str, string $prefix, ?string $encoding = null): bool
{
    return 0 === search($str, $prefix, 0, $encoding);
}
