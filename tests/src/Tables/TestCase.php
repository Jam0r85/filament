<?php

namespace Filament\Tests\Tables;

use Filament\Tests\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return array_merge(parent::getPackageProviders($app), [
            TablesServiceProvider::class,
        ]);
    }
}
