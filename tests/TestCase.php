<?php

declare(strict_types=1);

namespace Conia\Cms\Boiler\Tests;

use Conia\Core\Factory\Nyholm;
use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class TestCase extends BaseTestCase
{
    public const TEMPLATES = __DIR__ . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;

    public function throws(string $exception, string $message = null): void
    {
        $this->expectException($exception);

        if ($message) {
            $this->expectExceptionMessage($message);
        }
    }

    public function factory(): Nyholm
    {
        return new Nyholm();
    }

    public function templates(): array
    {
        return [self::TEMPLATES];
    }
}
