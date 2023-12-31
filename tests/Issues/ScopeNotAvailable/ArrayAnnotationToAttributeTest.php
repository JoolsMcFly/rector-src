<?php

declare(strict_types=1);

namespace Rector\Tests\Issues\ScopeNotAvailable;

use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ArrayAnnotationToAttributeTest extends AbstractRectorTestCase
{
    #[DataProvider('provideData')]
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public static function provideData(): Iterator
    {
        return self::yieldFilesFromDirectory(__DIR__ . '/FixtureArrayAnnotationToAttribute');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/array_annotation_to_attribute.php';
    }
}
