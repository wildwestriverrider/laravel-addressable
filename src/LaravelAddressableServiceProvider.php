<?php

namespace Wildwestriverrider\LaravelAddressable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wildwestriverrider\LaravelAddressable\Commands\LaravelAddressableCommand;

class LaravelAddressableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-addressable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations([
                'create_addressable_states_table',
                'create_addressable_table',
            ])
            ->hasCommand(LaravelAddressableCommand::class);
    }
}
